<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,username',
            // 'phone_number' => 'required|unique:users,phone_number|digits_validation',
            'phone_number' => 'required|unique:users,phone_number',
            'home_address' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            // 'password' => 'required|strong_password',
        ];
    }
}
