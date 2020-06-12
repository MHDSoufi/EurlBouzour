<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'psoeudo' => ['required',
                           Rule::unique('users', 'psoeudo')->ignore($this->user)
                         ],
            'email' => 'nullable|email',
            'tel' => 'nullable|regex:/(0)[0-9]{9}/',
        ];
    }
}
