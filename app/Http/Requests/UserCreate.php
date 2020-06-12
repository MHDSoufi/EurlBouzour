<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreate extends FormRequest
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
            'name' => 'required|min:5',
            'psoeudo' => 'required|min:5|unique:App\User,psoeudo',
            'pwd' => 'required|min:8',
            'pwd2' => 'required|same:pwd',
            'email' => 'nullable|email',
            'tel' => 'nullable|regex:/(0)[0-9]{9}/',
        ];
    }
}
