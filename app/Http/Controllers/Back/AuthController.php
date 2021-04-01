<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Http\Requests\LoginRequest;
    use App\Http\Requests\FrogetPasswordRequest;
    use App\Mail\ForgetPassword;
    use Auth, Validator, DB, Mail, Str;

    class AuthController extends Controller{
        public function login(Request $request){
            return view('back.auth.login');
        }

        public function signin(LoginRequest $request){
            if($request->ajax()){ return true; }

            $auth = auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 'Y']);
            if($auth != false){
                $user = auth()->guard('admin')->user();
                if($user->status == 'inactive'){
                    auth()->guard('admin')->logout();
                    return redirect()->route('back.login')->with('error', 'Account belongs to this credentials is inactive, please contact administrator');
                }elseif($user->status == 'deleted'){
                    auth()->guard('admin')->user()->logout();
                    return redirect()->route('back.login')->with('error', 'Account belongs to this credentials is deleted, please contact administrator');
                }else{
                    return redirect()->route('back.home')->with('success', 'Login successfully');
                }
            }else{
                return redirect()->route('back.login')->with('error', 'invalid credentials, please check credentials');
            }
        }

        public function logout(Request $request){
            auth()->guard('admin')->logout();
            return redirect()->route('back.login');
        }

        public function forget_password(Request $request){
            return view('back.auth.forget_password');
        }

        public function password_forget(FrogetPasswordRequest $request){
            DB::beginTransaction();
            try{
                $user = DB::table('users')->where(['email' => $request->email])->first();

                if(empty($user))
                    return redirect()->back()->with(['error' => 'Entered email address does not exists in records, please check email address']);

                if($user->is_admin == 'N')
                    return redirect()->back()->with(['error' => 'Account belongs to this email address is not admin account, please contact admin']);

                if($user->status != 'active')
                    return redirect()->back()->with(['error' => 'Account belongs to this email address is deactivated, please contact admin']);

                $token = Str::random(60);
                $link = url('/back/reset-password').'/'.$token.'?email='.urlencode($user->email);

                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => date('Y-m-d H:i:s')
                ]);

                $mailData['from_email'] = _settings('MAIL_FROM_ADDRESS');
                $mailData['email'] = $request->email;
                $mailData['link'] = $link;
                $mailData['logo'] = _logo();

                Mail::to($request->email)->send(new ForgetPassword($mailData));

                DB::commit();
                return redirect()->route('back.login')->with('success', 'we are successfully send reset link to provided email address, please check your email address');
            }catch(\Exception $e){
                DB::rollback();
                return redirect()->back()->with('error', 'Somehing went wrong while sign up, please try again later!');    
            }
        }

        public function reset_password(Request $request, $string){
            $email = $request->email;
            return view('back.auth.reset_password', compact('email', 'string'));
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
                return redirect()->route('back.login')->with('error', 'reset password token mismatch, please regenerate link again')->withInput();

            $user = \DB::table('users')->where('email', $request->email)->first();

            if(empty($user))
                return redirect()->back()->with('error', 'email address does not exists, please check email address')->withInput();

            $crud = array(
                'password' => bcrypt($request->password),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            DB::table('users')->where('email', $request->email)->limit(1)->update($crud);

            DB::table('password_resets')->where('email', $user->email)->delete();

            return redirect()->route('back.login')->with('success', 'Password resetted successgully');
        }
    }
