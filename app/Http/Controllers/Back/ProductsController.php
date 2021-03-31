<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Product;
    use App\Models\Category;
    use App\Http\Requests\ProductRequest;
    use DataTables, DB, File;

    class ProductsController extends Controller{

        /** index */
            public function index(Request $request){
                if($request->ajax()){
                    $path = asset('/back/uploads/products/').'/';

                    $data = Product::select('id', 'name', 'price', 'status', 
                                            DB::Raw("SUBSTRING(".'description'.", 1, 50) AS description"),
                                            DB::Raw("CASE 
                                                        WHEN ".'image'." != '' 
                                                        THEN CONCAT("."'".$path."'".", ".'image'.") 
                                                        ELSE CONCAT("."'".$path."'".", 'default.png') 
                                                    END as image")
                                        )
                                    ->get();

                    return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($data){
                                return ' <div class="btn-group">
                                                <a href="'.route('back.products.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a> &nbsp;

                                                <a href="'.route('back.products.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
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

                            ->editColumn('image', function($data){
                                return '<img class="image" src="'.$data->image.'" border="0" width="50" height="40" class="img-rounded" align="center"> &nbsp;&nbsp;';
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

                            ->rawColumns(['action', 'status', 'image'])
                            ->make(true);
                }
                return view('back.products.index');
            }
        /** index */

        /** create */
            public function create(Request $request){
                $categories = DB::table('categories')->where('status','active')->get();
                
                return view('back.products.create')->with('categories', $categories);
            }
        /** create */

        /** insert */
            public function insert(ProductRequest $request){
                if($request->ajax()){ return true; }
                if(!empty($request->all())){
                    
                    $crud = [
                            'name' => $request->name,
                            'category_id' => $request->category_id,
                            'price' => $request->price,
                            'description' => $request->description ?? NULL,
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

                        $folder_to_upload = public_path().'/back/uploads/products/';

                        if (!\File::exists($folder_to_upload)) {
                            \File::makeDirectory($folder_to_upload, 0777, true, true);
                        }

                        $crud["image"] = $filenameToStore;
                    }else{
                        $crud["image"] = 'default.png';
                    }
                    
                    $category = Product::insertGetId($crud);
                    
                    if($category){
                        if(!empty($request->file('image')))
                            $file->move($folder_to_upload, $filenameToStore);

                        return redirect()->route('back.products')->with('success', 'Product Created Successfully.');
                    }else{
                        return redirect()->route('back.products')->with('error', 'Faild To Create Product!');
                    }
                }else{
                    return redirect()->back('back.products')->with('error', 'Something went wrong');
                }
            }
        /** insert */

        /** view */
            public function view(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.products')->with('error', 'Something went wrong Found');

                $id = base64_decode($id);
                $path = asset('/back/uploads/products/').'/';

                $data = DB::table('products AS p')
                                ->select('p.id', 'p.name', 'p.price', 'p.description', 'p.status',
                                    DB::Raw("CASE 
                                                WHEN ".'p.image'." != '' 
                                                THEN CONCAT("."'".$path."'".", ".'p.image'.") 
                                                ELSE CONCAT("."'".$path."'".", 'default.png') 
                                            END as image"), 'c.name AS category_name'
                                )
                        ->leftjoin('categories as c', 'p.category_id', 'c.id')
                        ->where(['p.id' => $id])
                        ->first();

                if($data)
                    return view('back.products.view')->with('data', $data);
                else
                    return redirect()->route('back.products')->with('error', 'No Product Found');
            }
        /** view */

        /** edit */
            public function edit(Request $request, $id=''){
                if($id == '')
                    return redirect()->route('back.products')->with('error', 'Something went wrong Found');

                $id = base64_decode($id);
                $path = asset('/back/uploads/products/').'/';
                $categories = DB::table('categories')->where('status', 'active')->get();

                $data = Product::select('id', 'category_id', 'name', 'price', 'description', 'status',
                                    DB::Raw("CASE 
                                                WHEN ".'image'." != '' 
                                                THEN CONCAT("."'".$path."'".", ".'image'.") 
                                                ELSE CONCAT("."'".$path."'".", 'default.png') 
                                            END as image")
                                )
                        ->where(['id' => $id])
                        ->first();
                
                if($data)
                    return view('back.products.edit')->with(['data' => $data, 'categories' => $categories]);
                else
                    return redirect()->route('back.products')->with('error', 'No Product Found');
            }
        /** edit */ 

        /** update */
            public function update(ProductRequest $request){
                if($request->ajax()){ return true; }

                if(!empty($request->all())){
                    $ext_user = Product::where(['id' => $request->id])->first();

                    $crud = [
                            'name' => $request->name,
                            'category_id' => $request->category_id,
                            'price' => $request->price,
                            'description' => $request->description ?? NULL,
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_by' => auth()->guard('admin')->user()->id
                    ];

                    if(!empty($request->file('image'))){
                        $file = $request->file('image');
                        $filenameWithExtension = $request->file('image')->getClientOriginalName();
                        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                        $extension = $request->file('image')->getClientOriginalExtension();
                        $filenameToStore = time()."_".$filename.'.'.$extension;

                        $folder_to_upload = public_path().'/back/uploads/products/';

                        if (!\File::exists($folder_to_upload)) {
                            \File::makeDirectory($folder_to_upload, 0777, true, true);
                        }

                        $crud["image"] = $filenameToStore;
                    }else{
                        $crud["image"] = $ext_user->image ?? null;
                    }

                    $update = Product::where('id',$request->id)->update($crud);

                    if($update){
                        if(!empty($request->file('image')))
                            $file->move($folder_to_upload, $filenameToStore);

                        return redirect()->route('back.products')->with('success', 'Product Updated Successfully.');
                    }else{
                        return redirect()->route('back.products')->with('error', 'Faild To Update Product!');
                    }
                }else{
                    return redirect()->back('back.products')->with('error', 'Something went wrong');
                }
            }
        /** update */

        /** change-status */
            public function change_status(Request $request){
                if(!$request->ajax()){ exit('No direct script access allowed'); }

                if(!empty($request->all())){
                    $id = base64_decode($request->id);
                    $status = $request->status;

                    $data = Product::where(['id' => $id])->first();

                    if(!empty($data)){
                        if($status == 'deleted'){
                            $file_path = public_path().'/back/uploads/products/'.$data->image;
                            @unlink($file_path);

                            $delete = Product::where('id',$id)->delete();
                            if($delete){
                                return response()->json(['code' => 200]);
                            }else{
                                return response()->json(['code' => 201]);
                            }
                        }else{
                            $update = Product::where(['id' => $id])->update(['status' => $status, 'updated_at' => date('Y-m-d H:i:s'), 'updated_by' => auth()->guard('admin')->user()->id]);

                            if($update){
                                return response()->json(['code' => 200]);
                            }else{
                                return response()->json(['code' => 201]);
                            }
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