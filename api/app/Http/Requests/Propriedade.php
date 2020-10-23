<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Propriedade extends FormRequest
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
            'email_proprietario' => 'required|email|max:60',
            'logradouro' => 'required|string|max:100',
            'numero' => 'nullable|max:5',
            'complemento' => 'nullable|max:60',
            'bairro' => 'required|string|max:30',
            'cidade' => 'required|string|max:60',
            'id_uf' => 'required|exists:uf,id'
        ];
    }
}
