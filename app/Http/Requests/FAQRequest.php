<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class FAQRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'title' => 'required',
                    'discription' => 'required'
                ];
            }else{
                return [
                    'title' => 'required',
                    'discription' => 'required'
                ];
            }
        }

        public function messages(){
            return [
                'title.required' => 'Please Enter Title',
                'discription.required' => 'Please Enter Description'
            ];
        }
    }