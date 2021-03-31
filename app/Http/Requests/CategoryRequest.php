<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class CategoryRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'name' => 'required',
                    'description' => 'required'
                ];
            }else{
                return [
                    'name' => 'required',
                    'description' => 'required'
                ];
            }
        }

        public function messages(){
            return [
                'name.required' => 'Please enter name',
                'description.required' => 'Please enter description'
            ];
        }
    }