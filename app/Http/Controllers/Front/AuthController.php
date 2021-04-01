<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\User;
    use App\Http\Requests\FrontLoginRequest;
    use App\Http\Requests\FrontRegisterRequest;
    use App\Http\Requests\FrontFrogetPasswordRequest;
    use App\Mail\FrontForgetPassword;
    use App\Mail\RegisterMail;
    use Auth, Validator, DB, Mail, Str;

    class AuthController extends Controller{
        public function login(Request $request){
            return view('front.auth.login');
        }

        public function signin(FrontLoginRequest $request){
            if($request->ajax()){ return true; }

            $auth = auth()->attempt(['email' => $request->email, 'password' => $request->password]);
            if($auth != false){
                $user = auth()->user();

                if($user->status == 'inactive'){
                    auth()->logout();
                    return redirect()->route('front.login')->with('error', 'Account belongs to this credentials is inactive, please contact administrator');
                }elseif($user->status == 'deleted'){
                    auth()->logout();
                    return redirect()->route('front.login')->with('error', 'Account belongs to this credentials is deleted, please contact administrator');
                }else{
                    return redirect()->route('front.home')->with('success', 'Login successfully');
                }
            }else{
                return redirect()->route('front.login')->with('error', 'invalid credentials, please check credentials');
            }
        }

        public function logout(Request $request){
            auth()->logout();
            return redirect()->route('front.login');
        }

        public function signup(Request $request){
            return view('front.auth.signup');
        }

        public function register(FrontRegisterRequest $request){
            if($request->ajax()){ return true; }

            DB::beginTransaction();
            try{
                $token = Str::random(60);

                $crud = [
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => bcrypt($request->password),
                    'remember_token' => $token,
                    'status' => 'inactive',
                    'created_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_by' => 1
                ];

                $user_last_id = User::insertGetId($crud);

                if($user_last_id > 0){
                    $link = url('/verification').'/'.$token.'?email='.urlencode($request->email);

                    $mailData['from_email'] = _settings('MAIL_FROM_ADDRESS');
                    $mailData['email'] = $request->email;
                    $mailData['link'] = $link;
                    $mailData['logo'] = _logo();

                    Mail::to($request->email)->send(new RegisterMail($mailData));

                    DB::commit();
                    return redirect()->route('front.home')->with('success', 'Sign up successfully, Please check your mail and follow instruction.');
                }else{
                    DB::rollback();
                    return redirect()->back()->with('error', 'Somehing went wrong while sign up, please try again later!');
                }
            }catch(\Exception $e){
                DB::rollback();
                return redirect()->back()->with('error', 'Somehing went wrong while sign up, please try again later!');    
            }
        }

        public function verifiaction(Request $request, $string){
            $email = $request->email;
            dd($email, $string);
        }

        public function forget_password(Request $request){
            return view('front.auth.forget_password');
        }

        public function password_forget(FrontFrogetPasswordRequest $request){
            $user = DB::table('users')->where(['email' => $request->email])->first();

            if(empty($user))
                return redirect()->back()->with(['error' => 'Entered email address does not exists in records, please check email address']);

            if($user->is_admin == 'Y')
                return redirect()->back()->with(['error' => 'Account belongs to this email address is admin account, please use not admin account']);

            if($user->status != 'active')
                return redirect()->back()->with(['error' => 'Account belongs to this email address is deactivated, please contact admin']);

            $token = Str::random(60);
            $link = url('/front/reset-password').'/'.$token.'?email='.urlencode($user->email);

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            $mailData['from_email'] = _settings('MAIL_FROM_ADDRESS');
            $mailData['email'] = $request->email;
            $mailData['link'] = $link;
            $mailData['logo'] = $link;

            Mail::to($request->email)->send(new FrontForgetPassword($mailData));

            return redirect()->route('front.login')->with('success', 'we are successfully send reset link to provided email address, please check your email address');
        }

        public function reset_password(Request $request, $string){
            $email = $request->email;
            return view('front.reset_password', compact('email', 'string'));
        }

        public function recover_password(Request $request){
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email',
                'password' => 'required',
                'token' => 'required'
            ]);

            if($validator->fails())
                return redirect()->back()->withErrors($validator)->withInput();

            $tokenData = \DB::table('password_resets')->where('token', $request->token)->OrderBy('created_at', 'desc')->first();

            if(empty($tokenData))
                return redirect()->route('front.login')->with('error', 'reset password token mismatch, please regenerate link again')->withInput();

            $user = \DB::table('users')->where('email', $request->email)->first();

            if(empty($user))
                return redirect()->back()->with('error', 'email address does not exists, please check email address')->withInput();

            $crud = array(
                'password' => bcrypt($request->password),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            DB::table('users')->where('email', $request->email)->limit(1)->update($crud);

            DB::table('password_resets')->where('email', $user->email)->delete();

            return redirect()->route('front.login')->with('success', 'Password resetted successgully');
        }
    }
