<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class FrontRegisterRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            return [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|numeric|unique:users,phone',
                'password' => 'required|min:7',
                'terms' => 'accepted'
            ];
        }

        public function messages(){
            return [
                'firstname.required' => 'Please enter firstname',
                'lastname.required' => 'Please enter lastname',
                'email.required' => 'Please enter email address',
                'email.email' => 'Please enter valid email address',
                'email.unique' => 'Email address already registered, Please use another email addresss',
                'phone.required' => 'Please enter phone number',
                'phone.numeric' => 'Please enter valid phone number',
                'phone.unique' => 'Phone number address already registered, Please use another phone number',
                'password.required' => 'Please enter password',
                'password.min' => 'Please enter password minimum 7 character',
                'terms.accepted' => 'Please accept our terms & conditions and privacy policy.'
            ];
        }
    }
