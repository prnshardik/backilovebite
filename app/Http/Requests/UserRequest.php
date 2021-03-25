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
                    'status' => 'required'
                ];
            }else{
                return [
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'email' => 'required|email|unique:users,email',
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
                'password.required' => 'Please enter password',
                'password.min' => 'Please enter password minimum 6 character',
                'status.required' => 'Please select status',
            ];
        }
    }