<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class FrontLoginRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            return [
                'email' => 'required|email',
                'password' => 'required|min:7'
            ];
        }

        public function messages(){
            return [
                'email.required' => 'Please enter email',
                'email.email' => 'Please enter valid email',
                'password.required' => 'Please enter password',
                'password.min' => 'Please enter password minimum 7 digit'
            ];
        }
    }
