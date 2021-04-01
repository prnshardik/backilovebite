<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Contact;
    use App\Http\Requests\ContactRequest;
    use DataTables, DB, File;

    class ContactsController extends Controller{

        /** index */
            public function index(Request $request){
                if($request->ajax()){

                    $data = Contact::all();

                    return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($data){
                                return ' <div class="btn-group">
                                                <a href="'.route('back.contacts.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a> &nbsp;

                                                <a href="javascript:;" onclick="delete_sub(this);" data-id="'.base64_encode($data->id).'" class="btn btn-default btn-xs">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a> &nbsp;
                                            </div>';
                            })

                            ->rawColumns(['action'])
                            ->make(true);
                }
                return view('back.contacts.index');
            }
        /** index */

        /** View */
            public function view(Request $request){
                $id= base64_decode($request->id);
                if(isset($id) && $id != null){
                    $contacts = DB::table('contact_us')->where('id' ,$id)->first();
                    return view('back.contacts.view')->with('data',$contacts); 
                }
            }
        /** View */


        /** change-status */
            public function delete(Request $request){
                if(!$request->ajax()){ exit('No direct script access allowed'); }

                if(!empty($request->all())){
                    $id = base64_decode($request->id);
                    

                    $data = Contact::where(['id' => $id])->first();
                    if(!empty($data)){
                        $delete = Contact::where(['id' => $id])->delete();
                
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
