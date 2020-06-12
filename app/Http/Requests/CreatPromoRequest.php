<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatPromoRequest extends FormRequest
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
            'name' => 'required|min:10|unique:App\Model\Promo,nom_promo',
            'description' => 'required|min:50',
            'adr' => 'required|min:10',
            'lg' => ['required','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/'],
            'lt' =>  ['required','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
            'comune' => 'required',
        ];
    }
}
