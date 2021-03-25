<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\User;
    use DataTables , DB;

    class UsersController extends Controller{
    // Index User //    
        public function index(Request $request){
            if($request->ajax()){
                $data = User::all();

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
                        ->editColumn('fullname' , function($data){
                            return $data->firstname .' '. $data->lastname;
                        })

                        ->editColumn('image' , function($data){
                            $url = asset('back/uploads/users/'.$data->image);
                            return '<img class="image" src="'.$url.'" border="0" width="40" height="40" class="img-rounded" align="center">';
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

                        ->rawColumns(['action', 'status' ,'fullname' ,'image'])
                        ->make(true);
            }
            return view('back.users.index');
        }
    // Index User //


    // View User //
        public function view(Request $request){
            $id = base64_decode($request->id);
            $path = asset('/back/uploads/users/').'/';
            $data = DB::table('users')
                    ->select('id','firstname','lastname','email',
                        DB::Raw("CASE WHEN ".'image'." != '' THEN CONCAT("."'".$path."'".", ".'image'.") ELSE CONCAT("."'".$path."'".", 'default.png') END as image"))
                    ->where('id' ,$id)
                    ->first();
            if($data){
                return view('back.users.view')->with('data',$data);
            }else{
                return redirect()->route('back.users.index')->with('error','No User Found');
            }
        }
    // View User // 

    // Create User //
        public function create(Request $request){
            return view('back.users.create');
        }
    // Create User //

    // Insert User //
        public function insert(Request $request){
            if(!empty($request->all())){
                $password = $request->password ?? 'abcd234';
                $crud = [
                        'firstname' => $request->firstname,
                        'lastname' => $request->lastname,
                        'email' => $request->email,
                        'password' => bcrypt($password),
                        'status' => 'active',
                        'created_at' => date('Y-m-d H:i:s'),
                        'created_by' => auth()->user()->id,
                        'updated_at' => date('Y-m-d H:i:s'),
                        'updated_by' => auth()->user()->id
                ];

                    // dd($request->password);
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
                    $file->move($folder_to_upload, $filenameToStore);

                    $crud["image"] = $filenameToStore;
                }else{
                    $crud["image"] = 'default.png';
                }
                
                $user_last_id = User::insertGetId($crud);
                if($user_last_id){
                    return redirect()->route('back.users')->with('success', 'User Created Successfully.');
                }else{
                    return redirect()->route('back.users')->with('error', 'Faild To Create User!');
                }
            }
        }
    // Insert User //

    // Edit User //
        public function edit(Request $request){
            $id = base64_decode($request->id);
            $path = asset('/back/uploads/users/').'/';
            $data = DB::table('users')
                    ->select('id','firstname','lastname','email',
                        DB::Raw("CASE WHEN ".'image'." != '' THEN CONCAT("."'".$path."'".", ".'image'.") ELSE CONCAT("."'".$path."'".", 'default.png') END as image"))
                    ->where('id' ,$id)
                    ->first();
            if($data){
                return view('back.users.edit')->with('data',$data);
            }else{
                return redirect()->route('back.users.index')->with('error','No User Found');
            }
        }
    // Edit User // 

    // Update User //
        public function update(Request $request){
            if(!empty($request->all())){
                $ext_user = DB::table('users')->where('id',$request->id)->first();
                $crud = [
                        'firstname' => $request->firstname,
                        'lastname' => $request->lastname,
                        'email' => $request->email,
                        'updated_at' => date('Y-m-d H:i:s'),
                        'updated_by' => auth()->user()->id
                ];

                    // dd($request->password);
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
                    $file->move($folder_to_upload, $filenameToStore);

                    $crud["image"] = $filenameToStore;
                }else{
                    $crud["image"] = $ext_user->image ?? null;
                }
                
                $update = User::where(['id' => $request->id])->update($crud);
                if($update){
                    return redirect()->route('back.users')->with('success', 'User Updated Successfully.');
                }else{
                    return redirect()->route('back.users')->with('error', 'Faild To Update User!');
                }
            }
        }
    // Update User //


    // Change Status //
        public function change_status(Request $request){
            if(!$request->ajax()){ exit('No direct script access allowed'); }

            if(!empty($request->all())){
                $id = base64_decode($request->id);
                $status = $request->status;

                $user = User::where(['id' => $id])->first();

                if(!empty($user)){
                    DB::beginTransaction();
                    try {

                        $update = User::where(['id' => $id])->update(['status' => $status, 'updated_by' => auth()->user()->id]);
                        if($update){
                            DB::commit();
                            return response()->json(['code' => 200]);
                        }else{
                            DB::rollback();
                            return response()->json(['code' => 201]);
                        }
                    } catch (\Throwable $th) {
                        DB::rollback();
                        return response()->json(['code' => 201]);
                    }
                }else{
                    return response()->json(['code' => 201]);
                }
            }else{
                return response()->json(['code' => 201]);
            }
        }
    // Change Status //
}
