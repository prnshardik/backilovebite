<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class ReviewRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'name' => 'required',
                    'title' => 'required',
                    'message' => 'required'
                ];
            }else{
                return [
                    'name' => 'required',
                    'title' => 'required',
                    'message' => 'required'
                ];
            }
        }

        public function messages(){
            return [
                'name.required' => 'Please Enter Name',
                'title.required' => 'Please Enter Title',
                'message.required' => 'Please Enter Description'
            ];
        }
    }