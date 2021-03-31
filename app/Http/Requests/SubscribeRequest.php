<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class SubscribeRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            return [
                'EMAIL' => 'required|email|unique:subscribes,email',
            ];
        }

        public function messages(){
            return [
                'EMAIL.required' => 'Please enter email address',
                'EMAIL.email' => 'Please enter valid email address',
                'EMAIL.unique' => 'Email address already registered, Please use another email addresss',
            ];
        }
    }
