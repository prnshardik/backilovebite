<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Setting;
    use DataTables, DB, File;

    class TempSettingsController extends Controller{
        public function index(){
            $general = Setting::select('id', 'key', 'value')->where(['type' => 'general'])->get();
            $smtp = Setting::select('id', 'key', 'value')->where(['type' => 'smtp'])->get();
            $sms = Setting::select('id', 'key', 'value')->where(['type' => 'sms'])->get();
            $payment = Setting::select('id', 'key', 'value')->where(['type' => 'payment'])->get();
            $logo = Setting::select('id', 'key', 'value')->where(['type' => 'logo'])->get();

            return view('back.temp_settings.index', ['general' => $general, 'smtp' => $smtp, 'sms' => $sms, 'payment' => $payment, 'logo' => $logo]);
        }

        public function update(Request $request){
            $data = $request->all();
            unset($data['_method']);
            unset($data['_token']);
            $tab = $data['tab'];

            if(!empty($data)){
                foreach($data as $key => $value){
                    $data = Setting::where(['id' => $key])->first();
                    if(!empty($data)){
                        $data->value = $value;
                        $data->save();
                    }
                }
            }

            return redirect()->back()->with(['success' => 'Settings updated successfully', 'tab' => $tab]);
        }
    }
