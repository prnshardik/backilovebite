<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Timing;
    use App\Http\Requests\TimingRequest;
    use DataTables, DB, File;

    class TimingController extends Controller{

        public function index(Request $request){
            $data = Timing::all();

            return view('back.timings.index', ['data' => $data]);
        }

        public function update(Request $request){
            $input = $request->all();
            unset($input['_token']);
            unset($input['_method']);

            if(isset($input) && !empty($input)){
                foreach($input as $key => $value){
                    $timing = Timing::find($key);

                    if(isset($value['status']) && $value['status'] == 'on')
                        $timing->status = 'active';
                    else
                        $timing->status = 'inactive';

                    $timing->start_time = $value['start_time'];
                    $timing->end_time = $value['end_time'];

                    $timing->save();
                }

                return redirect()->back()->with('success', 'Shop timing updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong, Please try again later');
            }
        }
    }