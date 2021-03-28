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
            'fullname' => 'required|min:3|max:30|alpha|bail',
            'username' => 'required|max:50|bail',
            'password' => 'required|min:8|max:20|bail',
            'email' => 'required|min:10|max:50|email:rfc,dns|bail',
            'city' => 'required|min:3|max:20|bail',
            'country' => 'required|min:3|max:20|bail',
            'phone' => 'required|min:11|max:15|bail',
            'password' => 'required|min:8|max:20|bail',

        ];
    }
}
