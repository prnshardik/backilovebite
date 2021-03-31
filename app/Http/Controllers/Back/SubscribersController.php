<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Subscribe;
    use App\Http\Requests\CategoryRequest;
    use DataTables, DB, File;

    class SubscribersController extends Controller{

        /** index */
            public function index(Request $request){
                if($request->ajax()){

                    $data = Subscribe::select('id','email')
                                    ->get();

                    return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($data){
                                return ' <div class="btn-group">
                                                <a href="javascript:;" onclick="delete_sub(this);" data-id="'.base64_encode($data->id).'" class="btn btn-default btn-xs">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a> &nbsp;
                                            </div>';
                            })

                            ->rawColumns(['action'])
                            ->make(true);
                }
                return view('back.subscriber.index');
            }
        /** index */

        /** change-status */
            public function delete(Request $request){
                if(!$request->ajax()){ exit('No direct script access allowed'); }

                if(!empty($request->all())){
                    $id = base64_decode($request->id);
                    

                    $data = Subscribe::where(['id' => $id])->first();
                    if(!empty($data)){
                        $delete = Subscribe::where(['id' => $id])->delete();
                
                        if($delete)
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
