<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\FAQs;
    use App\Http\Requests\FAQRequest;
    use DataTables, DB, File;

    class FAQsController extends Controller{

        /** index */
            public function index(Request $request){
                if($request->ajax()){

                    $data = FAQs::select('id','title' ,'status',
                                            DB::Raw("SUBSTRING(".'discription'.", 1, 50) AS discription"),
                                        )
                                    ->orderBy('id','desc')
                                    ->get();

                    return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($data){
                                return ' <div class="btn-group">
                                                <a href="'.route('back.FAQs.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a> &nbsp;

                                                <a href="'.route('back.FAQs.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
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
                                    return '<span class="badge badge-pill badge-danger">Inactive</span>';
                                }else{
                                    return '-';
                                }
                            })

                            ->rawColumns(['action', 'status'])
                            ->make(true);
                }
                return view('back.faqs.index');
            }
        /** index */

        /** create */
            public function create(Request $request){
                return view('back.FAQs.create');
            }
        /** create */

        /** insert */
            public function insert(FAQRequest $request){
                if($request->ajax()){ return true; }

                if(!empty($request->all())){
                    $crud = [
                            'title' => $request->title ?? NULL,
                            'discription' => $request->discription ?? NULL,
                            'status' => 'active',
                            'created_at' => date('Y-m-d H:i:s'),
                            'created_by' => auth()->guard('admin')->user()->id,
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => auth()->guard('admin')->user()->id
                    ];


                    $faq = FAQs::insertGetId($crud);

                    if($faq){
                        return redirect()->route('back.FAQs')->with('success', 'FAQ Created Successfully.');
                    }else{
                        return redirect()->route('back.FAQs')->with('error', 'Faild To Create FAQ !');
                    }
                }else{
                    return redirect()->back('back.FAQs')->with('error', 'Something went wrong');
                }
            }
        /** insert */

        /** view */
            public function view(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.FAQs')->with('error', 'Something went wrong');
                $id = base64_decode($id);

                $data = FAQs::select('title' ,'status','discription')
                        ->where(['id' => $id])
                        ->first();

                if($data)
                    return view('back.FAQs.view')->with('data', $data);
                else
                    return redirect()->route('back.FAQs')->with('error', 'No FAQ Found');
            }
        /** view */

        /** edit */
            public function edit(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.FAQs')->with('error', 'Something went wrong');

                $id = base64_decode($id);

                $data = FAQs::select('id','title' ,'status','discription')
                        ->where(['id' => $id])
                        ->first();

                if($data)
                    return view('back.FAQs.edit')->with('data', $data);
                else
                    return redirect()->route('back.FAQs')->with('error', 'No FAQ Found');
            }
        /** edit */

        /** update */
            public function update(FAQRequest $request){
                if($request->ajax()){ return true; }

                if(!empty($request->all())){
                    $ext_user = FAQs::where(['id' => $request->id])->first();

                    $crud = [
                            'title' => $request->title ?? NULL,
                            'discription' => $request->discription ?? NULL,
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => auth()->guard('admin')->user()->id
                    ];


                    $update = FAQs::where('id',$request->id)->update($crud);

                    if($update){
                        return redirect()->route('back.FAQs')->with('success', 'FAQ Updated Successfully.');
                    }else{
                        return redirect()->route('back.FAQs')->with('error', 'Faild To Update FAQ !');
                    }
                }else{
                    return redirect()->back('back.FAQs')->with('error', 'Something went wrong');
                }
            }
        /** update */

        /** change-status */
            public function change_status(Request $request){
                if(!$request->ajax()){ exit('No direct script access allowed'); }

                if(!empty($request->all())){
                    $id = base64_decode($request->id);
                    $status = $request->status;

                    $data = FAQs::where(['id' => $id])->first();

                    if(!empty($data)){
                        if($status == 'deleted'){
                            $delete = FAQs::where(['id' => $id])->delete();

                            if($delete)
                                return response()->json(['code' => 200]);
                            else
                                return response()->json(['code' => 201]);
                        }else{
                            $update = FAQs::where(['id' => $id])->update(['status' => $status, 'updated_at' => date('Y-m-d H:i:s'), 'updated_by' => auth()->guard('admin')->user()->id]);

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
