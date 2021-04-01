<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class ContactRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'name' => 'required',
                    'email' => 'required|email',
                    'phone' => 'required',
                    'subject' => 'required',
                    'message' => 'required'
                ];
            }else{
                return [
                    'name' => 'required',
                    'email' => 'required|email',
                    'phone' => 'required',
                    'subject' => 'required',
                    'message' => 'required'
                ];
            }
        }

        public function messages(){
            return [
                'name.required' => 'Please Enter Name',
                'email.required' => 'Please Enter Email ID',
                'email.email' => 'Please Enter Valid Email ID',
                'phone.required' => 'Please Enter Phone Number',
                'subject.required' => 'Please Enter Subject',
                'message.required' => 'Please Enter Message'
            ];
        }
    }