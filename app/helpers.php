<?php

    if (!function_exists('_site_title')) {
        function _site_title() {
            return 'Ilovebite';
        }
    }

    if (!function_exists('_site_title_sf')) {
        function _site_title_sf() {
            return 'LB';
        }
    }

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


?>
