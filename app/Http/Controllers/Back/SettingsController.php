<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Setting;
    use DB, File;

    class SettingsController extends Controller{
        public function index(){
            $general = Setting::select('id', 'key', 'value')->where(['type' => 'general'])->get();
            $smtp = Setting::select('id', 'key', 'value')->where(['type' => 'smtp'])->get();
            $sms = Setting::select('id', 'key', 'value')->where(['type' => 'sms'])->get();
            $payment = Setting::select('id', 'key', 'value')->where(['type' => 'payment'])->get();
            $social = Setting::select('id', 'key', 'value')->where(['type' => 'social'])->get();
            $logo = Setting::select('id', 'key', 'value')->where(['type' => 'logo'])->get();

            return view('back.settings.index', ['general' => $general, 'smtp' => $smtp, 'sms' => $sms, 'payment' => $payment, 'social' => $social,'logo' => $logo]);
        }

        public function update(Request $request){
            $data = $request->all();
            unset($data['_method']);
            unset($data['_token']);
            $tab = $data['tab'];
            unset($data['tab']);

            if(!empty($data)){
                foreach($data as $key => $value){
                    $collection = Setting::where(['id' => $key])->first();
                    if(!empty($collection)){
                        $collection->value = $value;
                        $collection->save();
                    }
                }
            }

            return redirect()->back()->with(['success' => 'Settings updated successfully', 'tab' => $tab]);
        }

        public function logo_update(Request $request){
            $data = $request->all();
            unset($data['_method']);
            unset($data['_token']);
            $tab = $data['tab'];
            unset($data['tab']);

            if(!empty($data)){
                foreach($data as $key => $value){
                    $collection = Setting::where(['key' => $key])->first();
                    if(!empty($collection)){
                        if(!empty($request->file($key))){
                            $image_name = $collection->value;

                            $file = $request->file($key);
                            $filenameWithExtension = $request->file($key)->getClientOriginalName();
                            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                            $extension = $request->file($key)->getClientOriginalExtension();
                            $filenameToStore = strtolower($key).'.'.$extension;

                            $folder_to_upload = public_path().'/back/uploads/logo/';

                            if (!\File::exists($folder_to_upload)) {
                                \File::makeDirectory($folder_to_upload, 0777, true, true);
                            }

                            $collection->value = $filenameToStore;
                            $collection->save();

                            $file_path = public_path().'/back/uploads/logo/'.$image_name;

                            if(File::exists($file_path) && $file_path != ''){
                                @unlink($file_path);
                            }

                            if(!empty($request->file($key)))
                                $file->move($folder_to_upload, $filenameToStore);
                        }
                    }
                }
            }

            return redirect()->back()->with(['success' => 'Settings updated successfully', 'tab' => $tab]);

        }
    }
