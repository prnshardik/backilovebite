<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class ProductRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'name' => 'required',
                    'category_id' => 'required',
                    'price' => 'required'

                ];
            }else{
                return [
                    'name' => 'required',
                    'category_id' => 'required',
                    'price' => 'required'

                ];
            }
        }

        public function messages(){
            return [
                'name.required' => 'Please Enter Name',
                'category_id.required' => 'Please Select Category',
                'price.required' => 'Please Enter Price'
            ];
        }
    }