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
                    'price' => 'required|numeric',
                    'description' => 'required'
                ];
            }else{
                return [
                    'name' => 'required',
                    'category_id' => 'required',
                    'price' => 'required|numeric',
                    'description' => 'required'

                ];
            }
        }

        public function messages(){
            return [
                'name.required' => 'Please enter name',
                'category_id.required' => 'Please select category',
                'price.required' => 'Please enter price',
                'price.digits' => 'Please enter price in digits only',
                'description.required' => 'Please enter description'
            ];
        }
    }