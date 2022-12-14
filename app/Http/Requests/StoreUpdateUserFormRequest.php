<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ??'';

        $rules =[

            'company' => [
                'required',
                'string',
                'max:255',
                'min:1',
            ],

            'name' => [
                'required',
                'string',
                'max:255',
                'min:3',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'min:3',
            ],

            'telephone' => [
                'required',
                'string',
                'max:255',
                'min:3',
            ]

        ];
        

        return $rules;
    }
}
