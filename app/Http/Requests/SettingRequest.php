<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class SettingRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'key' => 'required'
                ];
            }else{
                return [
                    'key' => 'required',
                    'value' => 'required',
                ];
            }
        }

        public function messages(){
            return [
                'key.required' => 'Please Enter Key',
                'value.required' => 'Please Enter Value',
            ];
        }
    }