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
                                                <a href="'.route('back.Timings.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a> &nbsp;

                                                <a href="'.route('back.Timings.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
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

                            ->editColumn('start_end_time',function($data){
                                if($data->start_time !=null && $data->end_time !=null){
                                    return $data->start_time .'-'.$data->end_time;
                                }else{
                                    return 'Closed';
                                }
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

                            ->rawColumns(['action', 'status' ,'start_end_time'])
                            ->make(true);
                }
                return view('back.timings.index');
            }
        /** index */


        /** view */
            public function view(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.Timings')->with('error', 'Something went wrong');

                $id = base64_decode($id);

                $data = Timing::where(['id' => $id])
                        ->first();

                if($data)
                    return view('back.Timings.view')->with('data', $data);
                else
                    return redirect()->route('back.Timings')->with('error', 'No Timing Found');
            }
        /** view */

        /** edit */
            public function edit(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.Timings')->with('error', 'Something went wrong !');

                $id = base64_decode($id);

                $data = Timing::where(['id' => $id])->first();

                if($data)
                    return view('back.Timings.edit')->with('data', $data);
                else
                    return redirect()->route('back.Timings')->with('error', 'No Timing Found');
            }
        /** edit */

        /** update */
            public function update(TimingRequest $request){
                if($request->ajax()){ return true; }

                if(!empty($request->all())){
                    $ext_user = Timing::where(['id' => $request->id])->first();

                    if($request->start_time != null){
                        $start_time = date('h:i A',strtotime($request->start_time));
                    }else{
                        $start_time =null;
                    }

                    if($request->end_time != null){
                        $end_time = date('h:i A',strtotime($request->end_time));
                    }else{
                        $end_time =null;
                    }

                    $crud = [
                            'days' => $request->days,
                            'start_time' => $start_time ?? NULL,
                            'end_time' => $end_time ?? NULL,
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => auth()->guard('admin')->user()->id
                    ];

                   

                    $update = Timing::where('id',$request->id)->update($crud);

                    if($update){
                        return redirect()->route('back.Timings')->with('success', 'Timing Updated Successfully.');
                    }else{
                        return redirect()->route('back.Timings')->with('error', 'Faild To Update Timing !');
                    }
                }else{
                    return redirect()->back('back.Timings')->with('error', 'Something went wrong');
                }
            }
        /** update */

        /** change-status */
            public function change_status(Request $request){
                if(!$request->ajax()){ exit('No direct script access allowed'); }

                if(!empty($request->all())){
                    $id = base64_decode($request->id);
                    $status = $request->status;

                    $data = Timing::where(['id' => $id])->first();

                    if(!empty($data)){
                        if($status == 'deleted'){

                            $delete = Timing::where(['id' => $id])->delete();

                            if($delete)
                                return response()->json(['code' => 200]);
                            else
                                return response()->json(['code' => 201]);
                        }else{
                            $update = Timing::where(['id' => $id])->update(['status' => $status, 'updated_at' => date('Y-m-d H:i:s'), 'updated_by' => auth()->guard('admin')->user()->id]);

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
