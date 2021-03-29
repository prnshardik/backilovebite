<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Setting;
    use App\Http\Requests\SettingRequest;
    use DataTables, DB, File;

    class SettingsController extends Controller{

        /** index */
            public function index(Request $request){
                if($request->ajax()){
                    if($request->flag == 'logo'){
                        $path = asset('/back/uploads/logo/').'/';
                        $logo = Setting::select('id', 'key','status',
                                                DB::Raw("CASE
                                                            WHEN ".'value'." != ''
                                                            THEN CONCAT("."'".$path."'".", ".'value'.")
                                                            ELSE CONCAT("."'".$path."'".", 'default.png')
                                                        END as value")
                                            )
                                        ->where('type','logo')
                                        ->get();

                        return Datatables::of($logo)
                                ->addIndexColumn()
                                ->addColumn('action', function($data){
                                    return ' <div class="btn-group">
                                                    <a href="'.route('back.settings.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                        <i class="fa fa-eye"></i>
                                                    </a> &nbsp;

                                                    <a href="'.route('back.settings.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </a> &nbsp;

                                                    <a href="javascript:;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-bars"></i>
                                                    </a> &nbsp;
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="active" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Active</a></li>
                                                        <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="inactive" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Inactive</a></li>
                                                    </ul>
                                                </div>';
                                })

                                ->editColumn('value', function($data){
                                    return '<img class="image" src="'.$data->value.'" border="0" width="50" height="40" class="img-rounded" align="center"> &nbsp;&nbsp;';
                                })

                                ->editColumn('status', function($data) {
                                    if($data->status == 'active'){
                                        return '<span class="badge badge-pill badge-success">Active</span>';
                                    }else if($data->status == 'inactive'){
                                        return '<span class="badge badge-pill badge-warning">Inactive</span>';
                                    }else{
                                        return '-';
                                    }
                                })

                                ->rawColumns(['action', 'status', 'value'])
                                ->make(true);
                    }

                    if($request->flag == 'general') {
                        $general = Setting::select('id', 'key', 'value','status')
                                        ->where('type','general')
                                        ->get();

                            return Datatables::of($general)
                                    ->addIndexColumn()
                                    ->addColumn('action', function($data){
                                        return ' <div class="btn-group">
                                                        <a href="'.route('back.settings.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                            <i class="fa fa-eye"></i>
                                                        </a> &nbsp;

                                                        <a href="'.route('back.settings.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </a> &nbsp;

                                                        <a href="javascript:;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fa fa-bars"></i>
                                                        </a> &nbsp;
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="active" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Active</a></li>
                                                            <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="inactive" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Inactive</a></li>
                                                        </ul>
                                                    </div>';
                                    })

                                    ->editColumn('status', function($data) {
                                        if($data->status == 'active'){
                                            return '<span class="badge badge-pill badge-success">Active</span>';
                                        }else if($data->status == 'inactive'){
                                            return '<span class="badge badge-pill badge-warning">Inactive</span>';
                                        }else{
                                            return '-';
                                        }
                                    })

                                    ->rawColumns(['action', 'status', 'image'])
                                    ->make(true);
                    }

                    if($request->flag == 'smtp'){
                        $smtp = Setting::select('id', 'key', 'value','status')
                                        ->where('type','smtp')
                                        ->get();

                            return Datatables::of($smtp)
                                    ->addIndexColumn()
                                    ->addColumn('action', function($data){
                                        return ' <div class="btn-group">
                                                        <a href="'.route('back.settings.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                            <i class="fa fa-eye"></i>
                                                        </a> &nbsp;

                                                        <a href="'.route('back.settings.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </a> &nbsp;

                                                        <a href="javascript:;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fa fa-bars"></i>
                                                        </a> &nbsp;
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="active" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Active</a></li>
                                                            <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="inactive" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Inactive</a></li>
                                                        </ul>
                                                    </div>';
                                    })

                                    ->editColumn('status', function($data) {
                                        if($data->status == 'active'){
                                            return '<span class="badge badge-pill badge-success">Active</span>';
                                        }else if($data->status == 'inactive'){
                                            return '<span class="badge badge-pill badge-warning">Inactive</span>';
                                        }else{
                                            return '-';
                                        }
                                    })

                                    ->rawColumns(['action', 'status', 'image'])
                                    ->make(true);
                    }

                    if($request->flag == 'sms'){
                        $sms = Setting::select('id', 'key', 'value','status')
                                        ->where('type','sms')
                                        ->get();

                            return Datatables::of($sms)
                                    ->addIndexColumn()
                                    ->addColumn('action', function($data){
                                        return ' <div class="btn-group">
                                                        <a href="'.route('back.settings.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                            <i class="fa fa-eye"></i>
                                                        </a> &nbsp;

                                                        <a href="'.route('back.settings.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </a> &nbsp;

                                                        <a href="javascript:;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fa fa-bars"></i>
                                                        </a> &nbsp;
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="active" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Active</a></li>
                                                            <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="inactive" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Inactive</a></li>
                                                        </ul>
                                                    </div>';
                                    })

                                    ->editColumn('status', function($data) {
                                        if($data->status == 'active'){
                                            return '<span class="badge badge-pill badge-success">Active</span>';
                                        }else if($data->status == 'inactive'){
                                            return '<span class="badge badge-pill badge-warning">Inactive</span>';
                                        }else{
                                            return '-';
                                        }
                                    })

                                    ->rawColumns(['action', 'status', 'image'])
                                    ->make(true);
                    }

                    if($request->flag == 'payment'){ 
                        $payment = Setting::select('id', 'key', 'value','status')
                                        ->where('type','payment')
                                        ->get();

                            return Datatables::of($payment)
                                    ->addIndexColumn()
                                    ->addColumn('action', function($data){
                                        return ' <div class="btn-group">
                                                        <a href="'.route('back.settings.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                            <i class="fa fa-eye"></i>
                                                        </a> &nbsp;

                                                        <a href="'.route('back.settings.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </a> &nbsp;

                                                        <a href="javascript:;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fa fa-bars"></i>
                                                        </a> &nbsp;
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="active" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Active</a></li>
                                                            <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="inactive" data-old_status="'.$data->status.'" data-id="'.base64_encode($data->id).'">Inactive</a></li>
                                                        </ul>
                                                    </div>';
                                    })

                                    ->editColumn('status', function($data) {
                                        if($data->status == 'active'){
                                            return '<span class="badge badge-pill badge-success">Active</span>';
                                        }else if($data->status == 'inactive'){
                                            return '<span class="badge badge-pill badge-warning">Inactive</span>';
                                        }else{
                                            return '-';
                                        }
                                    })

                                    ->rawColumns(['action', 'status', 'image'])
                                    ->make(true);
                    }

                }
                return view('back.settings.index');
            }
        /** index */


        /** view */
            public function view(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.settings')->with('error', 'Something went wrong Found');

                $id = base64_decode($id);;
                $path = asset('/back/uploads/logo/').'/';
                $data = Setting::select('id', 'key' ,'type',
                                        DB::Raw("CASE
                                                WHEN ".'type'." = 'logo'
                                                THEN CONCAT("."'".$path."'".", ".'value'.")
                                                ELSE CONCAT('',".'value'.")
                                            END as value")
                                        )
                        ->where(['id' => $id])
                        ->first();

                if($data)
                    return view('back.settings.view')->with('data', $data);
                else
                    return redirect()->route('back.settings')->with('error', 'No Setting Found');
            }
        /** view */

        /** edit */
            public function edit(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.settings')->with('error', 'Something went wrong Found');

                $id = base64_decode($id);;
                $path = asset('/back/uploads/logo/').'/';
                $data = Setting::select('id', 'key' ,'type',
                                        DB::Raw("CASE
                                                WHEN ".'type'." = 'logo'
                                                THEN CONCAT("."'".$path."'".", ".'value'.")
                                                ELSE CONCAT('',".'value'.")
                                            END as value")
                                        )
                        ->where(['id' => $id])
                        ->first();

                if($data)
                    return view('back.settings.edit')->with('data', $data);
                else
                    return redirect()->route('back.settings')->with('error', 'No Settings Found');
            }
        /** edit */

        /** update */
            public function update(SettingRequest $request){
                if($request->ajax()){ return true; }

                if(!empty($request->all())){
                    $ext_user = Setting::where(['id' => $request->id])->first();

                    $crud = [
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => auth()->user()->id
                    ];
                    if($request->flag == 'logo'){

                        if(!empty($request->file('value'))){
                            $file = $request->file('value');
                            $filenameWithExtension = $request->file('value')->getClientOriginalName();
                            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                            $extension = $request->file('value')->getClientOriginalExtension();
                            $filenameToStore = time()."_".$filename.'.'.$extension;

                            $folder_to_upload = public_path().'/back/uploads/logo/';

                            if (!\File::exists($folder_to_upload)) {
                                \File::makeDirectory($folder_to_upload, 0777, true, true);
                            }

                            $crud["value"] = $filenameToStore;
                        }else{
                            $crud["value"] = $ext_user->image ?? null;
                        }
                    }else{
                        $crud["value"] = $request->value;
                    }

                    $update = Setting::where('id',$request->id)->update($crud);

                    if($update){
                        if(!empty($request->file('value')))
                            $file->move($folder_to_upload, $filenameToStore);

                        return redirect()->route('back.settings')->with('success', 'Setting Updated Successfully.');
                    }else{
                        return redirect()->route('back.settings')->with('error', 'Faild To Update Setting!');
                    }
                }else{
                    return redirect()->back('back.settings')->with('error', 'Something went wrong');
                }
            }
        /** update */

        /** change-status */
            public function change_status(Request $request){
                if(!$request->ajax()){ exit('No direct script access allowed'); }

                if(!empty($request->all())){
                    $id = base64_decode($request->id);
                    $status = $request->status;

                    $data = Setting::where(['id' => $id])->first();

                    if(!empty($data)){
                        $update = Setting::where(['id' => $id])->update(['status' => $status, 'updated_at' => date('Y-m-d H:i:s'), 'updated_by' => auth()->user()->id]);

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
    }
