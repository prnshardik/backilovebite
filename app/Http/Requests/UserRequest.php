<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class UserRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'email' => 'required|email|unique:users,email,'.$this->id,
                    'phone' => 'required|unique:users,phone,'.$this->id,
                    'status' => 'required'
                ];
            }else{
                return [
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'phone' => 'required|unique:users,phone',
                    'password' => 'required|min:6'
                ];
            }
        }

        public function messages(){
            return [
                'firstname.required' => 'Please enter firstname',
                'lastname.required' => 'Please enter lastname',
                'email.required' => 'Please enter email address',
                'email.email' => 'Please enter valid email address',
                'email.unique' => 'Email address already registered, Please use another email addresss',
                'phone.required' => 'Please enter phone number',
                'phone.email' => 'Please enter valid phone number',
                'phone.unique' => 'Phone number address already registered, Please use another phone number',
                'password.required' => 'Please enter password',
                'password.min' => 'Please enter password minimum 6 character',
                'status.required' => 'Please select status',
            ];
        }
    }