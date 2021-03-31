<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Http\Requests\LoginRequest;
    use App\Http\Requests\ProfileRequest;
    use App\Http\Requests\FrogetPasswordRequest;
    use App\Mail\ForgetPassword;
    use App\Models\User;
    use Auth, Validator, DB, Mail, Str ,Hash;

    class ProfileController extends Controller{
        public function profile(Request $request){
            return view('back.profile.profile');
        }

        public function profile_edit(Request $request){
            $path = URL('/back/uploads/users').'/';
            $data = DB::table('users as u')
                                    ->select('u.id', 'u.firstname', 'u.lastname', 'u.email',
                                        DB::Raw("CASE
                                                    WHEN ".'u.image'." != '' THEN CONCAT("."'".$path."'".", ".'u.image'.")
                                                    ELSE CONCAT("."'".$path."'".", 'default.png')
                                                END as image")
                                        )
                                    ->where(['u.id' => auth()->guard('admin')->user()->id])
                                    ->first();
            return view('back.profile.edit')->with(['data' => $data]);
        }

        public function profile_update(ProfileRequest $request){
            if($request->ajax()){ return true ;}
            // dd($request->all());
            $crud = [
                'firstname' => ucfirst($request->firstname),
                'lastname' => ucfirst($request->lastname)
            ];

            $update = User::where(['id' => $request->id])->update($crud);

            if($update){
                if(!empty($request->file('image'))){
                    $file = $request->file('image');
                    $filenameWithExtension = $request->file('image')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $filenameToStore = time()."_".$filename.'.'.$extension;

                    $folder_to_upload = public_path().'/back/uploads/users/';

                    if (!\File::exists($folder_to_upload)) {
                        \File::makeDirectory($folder_to_upload, 0777, true, true);
                    }

                    $user_crud["image"] = $filenameToStore;

                    $user = User::where(['id' => $request->id])->update($user_crud);

                    if(!empty($request->file('image')) && $user){
                        $file->move($folder_to_upload, $filenameToStore);
                    }
                }

                return redirect()->route('back.profile')->with('success', 'Profile updated successfully.');
            }else{
                return redirect()->back()->with('error', 'Failed to updated record.')->withInput();
            }
        }

        public function change_password(){
            return view('back.profile.change_password');
        }

        public function reset_password(Request $request){
            $id = auth()->guard('admin')->user()->id;

            $this->validate(request(), [
                'current_password' => ['required', 'string', 'max:255'],
                'new_password' => ['required', 'string', 'max:255'],
            ]);

            $user = \DB::table('users')->where(['id' => $id])->first();
            if(!Hash::check($request->current_password, $user->password)){
                return back()->with('error', 'The current password is incorrect.');
            }

            $crud = array(
                'password' => \Hash::make($request->new_password),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            $update = DB::table('users')->where(['id' => $id])->limit(1)->update($crud);

            if($update){
                Auth::logout();
                return redirect()->route('back.login')->with('success', 'Password changed successfully.');
            }else{
                return redirect()->back()->with('error', 'Failed to change password.')->withInput();
            }
        }
    }
