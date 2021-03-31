<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\User;
    use App\Http\Requests\UserRequest;
    use DataTables, DB, File;

    class UsersController extends Controller{

        /** index */
            public function index(Request $request){
                if($request->ajax()){
                    $path = asset('/back/uploads/users/').'/';

                    $data = User::select('id', 'email', 'phone', 'status',
                                            DB::Raw("CONCAT(".'firstname'.", ' ', ".'lastname'.") as fullname"),
                                            DB::Raw("CASE 
                                                        WHEN ".'image'." != '' 
                                                        THEN CONCAT("."'".$path."'".", ".'image'.") 
                                                        ELSE CONCAT("."'".$path."'".", 'default.png') 
                                                    END as image")
                                        )
                                    ->where(['is_admin' => 'N'])
                                    ->get();

                    return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($data){
                                return ' <div class="btn-group">
                                                <a href="'.route('back.users.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a> &nbsp;

                                                <a href="'.route('back.users.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                </a> &nbsp;
                                                
                                                <a href="javascript:;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-bars"></i>
                                                </a> &nbsp;
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="active" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Active</a></li>
                                                    <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="inactive" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Inactive</a></li>
                                                    <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="deleted" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Delete</a></li>
                                                </ul>
                                            </div>';
                            })

                            ->editColumn('fullname', function($data){
                                return '<img class="image" src="'.$data->image.'" border="0" width="40" height="40" class="img-rounded" align="center"> &nbsp;&nbsp;'.$data->fullname;
                            })

                            ->editColumn('status', function($data) {
                                if($data->status == 'active'){
                                    return '<span class="badge badge-pill badge-success">Active</span>';
                                }else if($data->status == 'inactive'){
                                    return '<span class="badge badge-pill badge-warning">Inactive</span>';
                                }else if($data->status == 'deleted'){
                                    return '<span class="badge badge-pill badge-danger">Delete</span>';
                                }else{
                                    return '-';
                                }
                            })

                            ->rawColumns(['action', 'status', 'fullname'])
                            ->make(true);
                }
                return view('back.users.index');
            }
        /** index */

        /** create */
            public function create(Request $request){
                return view('back.users.create');
            }
        /** create */

        /** insert */
            public function insert(UserRequest $request){
                if($request->ajax()){ return true; }

                if(!empty($request->all())){
                    $password = $request->password ?? 'abcd234';
                    
                    $crud = [
                            'firstname' => $request->firstname,
                            'lastname' => $request->lastname,
                            'email' => $request->email,
                            'phone' => $request->phone ?? NULL,
                            'password' => bcrypt($password),
                            'status' => 'active',
                            'created_at' => date('Y-m-d H:i:s'),
                            'created_by' => auth()->guard('admin')->user()->id,
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => auth()->guard('admin')->user()->id
                    ];

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

                        $crud["image"] = $filenameToStore;
                    }else{
                        $crud["image"] = 'default.png';
                    }
                    
                    $user_last_id = User::insertGetId($crud);
                    
                    if($user_last_id){
                        if(!empty($request->file('image')))
                            $file->move($folder_to_upload, $filenameToStore);

                        return redirect()->route('back.users')->with('success', 'User Created Successfully.');
                    }else{
                        return redirect()->route('back.users')->with('error', 'Faild To Create User!');
                    }
                }else{
                    return redirect()->back('back.users')->with('error', 'Something went wrong');
                }
            }
        /** insert */

        /** view */
            public function view(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.users')->with('error', 'Something went wrong Found');

                $id = base64_decode($id);
                $path = asset('/back/uploads/users/').'/';

                $data = User::select('id', 'firstname', 'lastname', 'email', 'phone',
                                    DB::Raw("CASE 
                                                WHEN ".'image'." != '' 
                                                THEN CONCAT("."'".$path."'".", ".'image'.") 
                                                ELSE CONCAT("."'".$path."'".", 'default.png') 
                                            END as image")
                                )
                        ->where(['id' => $id])
                        ->first();
                
                if($data)
                    return view('back.users.view')->with('data', $data);
                else
                    return redirect()->route('back.users')->with('error', 'No User Found');
            }
        /** view */

        /** edit */
            public function edit(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.users')->with('error', 'Something went wrong Found');

                $id = base64_decode($id);
                $path = asset('/back/uploads/users/').'/';

                $data = User::select('id', 'firstname', 'lastname', 'email', 'status', 'phone',
                                    DB::Raw("CASE 
                                                WHEN ".'image'." != '' 
                                                THEN CONCAT("."'".$path."'".", ".'image'.") 
                                                ELSE CONCAT("."'".$path."'".", 'default.png') 
                                            END as image")
                                )
                        ->where(['id' => $id])
                        ->first();
                
                if($data)
                    return view('back.users.edit')->with('data', $data);
                else
                    return redirect()->route('back.users')->with('error', 'No User Found');
            }
        /** edit */ 

        /** update */
            public function update(UserRequest $request){
                if($request->ajax()){ return true; }

                if(!empty($request->all())){
                    $ext_user = User::where(['id' => $request->id])->first();

                    $crud = [
                            'firstname' => ucfirst($request->firstname),
                            'lastname' => ucfirst($request->lastname),
                            'email' => $request->email,
                            'phone' => $request->phone ?? NULL,
                            'status' => $request->status,
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => auth()->guard('admin')->user()->id
                    ];

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

                        $crud["image"] = $filenameToStore;
                    }else{
                        $crud["image"] = $ext_user->image ?? null;
                    }
                    
                    $update = User::where(['id' => $request->id])->update($crud);

                    if($update){
                        if(!empty($request->file('image')))
                            $file->move($folder_to_upload, $filenameToStore);

                        return redirect()->route('back.users')->with('success', 'User Updated Successfully.');
                    }else{
                        return redirect()->route('back.users')->with('error', 'Faild To Update User!');
                    }
                }else{
                    return redirect()->back('back.users')->with('error', 'Something went wrong');
                }
            }
        /** update */

        /** change-status */
            public function change_status(Request $request){
                if(!$request->ajax()){ exit('No direct script access allowed'); }

                if(!empty($request->all())){
                    $id = base64_decode($request->id);
                    $status = $request->status;

                    $data = User::where(['id' => $id])->first();

                    if(!empty($data)){
                        $update = User::where(['id' => $id])->update(['status' => $status, 'updated_at' => date('Y-m-d H:i:s'), 'updated_by' => auth()->guard('admin')->user()->id]);

                        if($update)
                            return response()->json(['code' => 200]);
                        else
                            return response()->json(['code' => 201]);
                    }else{
                        return response()->json(['code' => 201]);
                    }
                }else{
                    return response()->json(['code' => 201]);
                }
            }
        /** change-status */

        /** delete-image */
            public function delete_image(Request $request){
                if(!$request->ajax()){ exit('No direct script access allowed'); }

                if(!empty($request->all())){
                    $id = base64_decode($request->id);
                    $data = User::find($id);

                    if($data){
                        if($data->image != ''){
                            $file_path = public_path().'/back/uploads/users/'.$data->image;

                            if(File::exists($file_path) && $file_path != ''){
                                if($data->image != 'default.png'){
                                    unlink($file_path);
                                }
                            }

                            $update = User::where(['id' => $id])->limit(1)->update(['image' => '']);

                            if($update)
                                return response()->json(['code' => 200]);
                            else
                                return response()->json(['code' => 201]);
                        }else{
                            return response()->json(['code' => 200]);
                        }
                    }else{
                        return response()->json(['code' => 201]);
                    }
                }else{
                    return response()->json(['code' => 201]);
                }
            }
        /** delete-image */
    }