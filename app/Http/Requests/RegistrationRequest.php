<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,phone',
            'phone' => ['required', 'regex:/^([0|\+[9][1]{1,5})?([7-9][0-9]{9})$/', 'unique:users,phone'],
            'homeTown' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required|same:password'
        ];
    }
}
