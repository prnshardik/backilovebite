<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Timing;
    use App\Http\Requests\TimingRequest;
    use DataTables, DB, File;

    class TimingController extends Controller{

        /** index */
            public function index(Request $request){
                if($request->ajax()){

                    $data = Timing::all();

                    return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($data){
                                return ' <div class="btn-group">
                                                <a href="'.route('back.timings.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a> &nbsp;

                                                <a href="'.route('back.timings.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
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

                            ->rawColumns(['action', 'status'])
                            ->make(true);
                }
                return view('back.reviews.index');
            }
        /** index */

        /** create */
            public function create(Request $request){
                return view('back.reviews.create');
            }
        /** create */

        /** insert */
            public function insert(ReviewRequest $request){
                if($request->ajax()){ return true; }

                if(!empty($request->all())){
                    $crud = [
                            'name' => ucfirst($request->name),
                            'title' => $request->title ?? NULL,
                            'message' => $request->message ?? NULL,
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

                        $folder_to_upload = public_path().'/back/uploads/reviews/';

                        if (!\File::exists($folder_to_upload)) {
                            \File::makeDirectory($folder_to_upload, 0777, true, true);
                        }

                        $crud["image"] = $filenameToStore;
                    }else{
                        $crud["image"] = 'default.png';
                    }

                    $category = Review::insertGetId($crud);

                    if($category){
                        if(!empty($request->file('image')))
                            $file->move($folder_to_upload, $filenameToStore);

                        return redirect()->route('back.reviews')->with('success', 'Review Created Successfully.');
                    }else{
                        return redirect()->route('back.reviews')->with('error', 'Faild To Create Review !');
                    }
                }else{
                    return redirect()->back('back.reviews')->with('error', 'Something went wrong');
                }
            }
        /** insert */

        /** view */
            public function view(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.reviews')->with('error', 'Something went wrong');

                $id = base64_decode($id);
                $path = asset('/back/uploads/reviews/').'/';

                $data = Review::select('id', 'name', 'title' ,'status', 'message',
                                    DB::Raw("CASE
                                                WHEN ".'image'." != ''
                                                THEN CONCAT("."'".$path."'".", ".'image'.")
                                                ELSE CONCAT("."'".$path."'".", 'default.png')
                                            END as image")
                                )
                        ->where(['id' => $id])
                        ->first();

                if($data)
                    return view('back.reviews.view')->with('data', $data);
                else
                    return redirect()->route('back.reviews')->with('error', 'No Review Found');
            }
        /** view */

        /** edit */
            public function edit(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.categories')->with('error', 'Something went wrong Found');

                $id = base64_decode($id);
                $path = asset('/back/uploads/reviews/').'/';

                $data = Review::select('id', 'name', 'title' ,'status', 'message',
                                    DB::Raw("CASE
                                                WHEN ".'image'." != ''
                                                THEN CONCAT("."'".$path."'".", ".'image'.")
                                                ELSE CONCAT("."'".$path."'".", 'default.png')
                                            END as image")
                                )
                        ->where(['id' => $id])
                        ->first();

                if($data)
                    return view('back.reviews.edit')->with('data', $data);
                else
                    return redirect()->route('back.reviews')->with('error', 'No Review Found');
            }
        /** edit */

        /** update */
            public function update(ReviewRequest $request){
                if($request->ajax()){ return true; }

                if(!empty($request->all())){
                    $ext_user = Review::where(['id' => $request->id])->first();

                    $crud = [
                            'name' => $request->name,
                            'title' => $request->title ?? NULL,
                            'message' => $request->message ?? NULL,
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => auth()->guard('admin')->user()->id
                    ];

                    if(!empty($request->file('image'))){
                        $file = $request->file('image');
                        $filenameWithExtension = $request->file('image')->getClientOriginalName();
                        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                        $extension = $request->file('image')->getClientOriginalExtension();
                        $filenameToStore = time()."_".$filename.'.'.$extension;

                        $folder_to_upload = public_path().'/back/uploads/reviews/';

                        if (!\File::exists($folder_to_upload)) {
                            \File::makeDirectory($folder_to_upload, 0777, true, true);
                        }

                        $crud["image"] = $filenameToStore;
                    }else{
                        $crud["image"] = $ext_user->image ?? null;
                    }

                    $update = Review::where('id',$request->id)->update($crud);

                    if($update){
                        if(!empty($request->file('image')))
                            $file->move($folder_to_upload, $filenameToStore);

                        return redirect()->route('back.reviews')->with('success', 'Review Updated Successfully.');
                    }else{
                        return redirect()->route('back.reviews')->with('error', 'Faild To Update Review !');
                    }
                }else{
                    return redirect()->back('back.reviews')->with('error', 'Something went wrong');
                }
            }
        /** update */

        /** change-status */
            public function change_status(Request $request){
                if(!$request->ajax()){ exit('No direct script access allowed'); }

                if(!empty($request->all())){
                    $id = base64_decode($request->id);
                    $status = $request->status;

                    $data = Review::where(['id' => $id])->first();

                    if(!empty($data)){
                        if($status == 'deleted'){
                            $file_path = public_path().'/back/uploads/reviews/'.$data->image;
                            @unlink($file_path);

                            $delete = Review::where(['id' => $id])->delete();

                            if($delete)
                                return response()->json(['code' => 200]);
                            else
                                return response()->json(['code' => 201]);
                        }else{
                            $update = Review::where(['id' => $id])->update(['status' => $status, 'updated_at' => date('Y-m-d H:i:s'), 'updated_by' => auth()->guard('admin')->user()->id]);

                            if($update)
                                return response()->json(['code' => 200]);
                            else
                                return response()->json(['code' => 201]);
                        }
                    }else{
                        return response()->json(['code' => 201]);
                    }
                }else{
                    return response()->json(['code' => 201]);
                }
            }
        /** change-status */
    }
