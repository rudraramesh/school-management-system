<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fname'=>'required|min:3|alpha',
            'lname'=>'required|min:3|alpha',
            'username'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'phone'=>'required|min:10|numeric|',
            'address'=>'required|min:5|',
            'gender'=>'required',
            'image'=>'required|image',
            'password'=>'required|min:8|confirmed',


            


        ];
    }

    public function message(){
        return[
        'fname.required'=>'first name required',
        'fname.min'=>'first name must be greater then 3',
        'fmane.alpha'=>'first name only support alphabets',

        'lname.required'=>'last name required',
        'lname.min'=>'last name must be greater then 3',
        'lname.alpha'=>'last name only support alphabets',

        'username.required'=>'username is required',
        'username.unique'=>'this username is alredy taken',

        'email.required'=>'email is required',
        'email.email'=>'email is invalid',
        'email.unique'=>'email is alredy taken',

        'phone.required'=>'phone number is required',
        'phone.min'=>'phone number least contain 10 digits',
        'phone.numeric'=>'its only support numeric value',

         'address.required'=>'your address is required',
        'address.min'=>'address must be greater then 5 later',

        'gender.required'=>'gender is required',

        'image.required'=>'image is required',
        'image.image'=>'it only supports jpeg,jpg,png, and gif file',

        'password.required'=>'password is required',
        'password.min'=>'password must have 8 character',




        ];
    }
}
