<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^([0|\+[9][1]{1,5})?([7-9][0-9]{9})$/'],
            'landmark' => 'required',
            'city' => 'required',
            'address' => 'required',
            'pin' => 'required|numeric'
        ];
    }
}
