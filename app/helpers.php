<?php

    if (!function_exists('_settings')) {
        function _settings($key = '') {
            if($key == '')
                return NULL;

            $data = DB::table('settings')->select('value')->where(['key' => $key])->first();

            if(!empty($data))
                return $data->value;
            else
                return NULL;
        }
    }

    if(!function_exists('_user_profile')){
        function _user_profile(){
            $path = URL('/back/uploads/users').'/';
            $data = \DB::table('users')
                            ->select(
                                DB::Raw("CASE
                                        WHEN ".'image'." != '' THEN CONCAT("."'".$path."'".", ".'image'.")
                                        ELSE CONCAT("."'".$path."'".", 'default.png')
                                    END as image")
                                )
                            ->where(['id' => auth()->user()->id])
                            ->first();
            return $data->image;
        }
    }

    if(!function_exists('_site_name')){
        function _site_name(){
            return "ILoveBite";
        }
    }
?>
