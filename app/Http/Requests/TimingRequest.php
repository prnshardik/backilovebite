<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class TimingRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'days' => 'required'
                ];
            }else{
                return [
                    'days' => 'required'
                ];
            }
        }

        public function messages(){
            return [
                'days.required' => 'Please Select Day'
            ];
        }
    }