<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class FrontFrogetPasswordRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            return [
                'email' => 'required|email'
            ];
        }

        public function messages(){
            return [
                'email.required' => 'Please enter email',
                'email.email' => 'Please enter valid email'
            ];
        }
    }
