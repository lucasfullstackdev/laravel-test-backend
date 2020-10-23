<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class Contrato extends FormRequest
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
            'id_propriedade' => 'required|exists:propriedades,id',
            'tipo_pessoa' => ['required', Rule::in(['Pessoa Física', 'Pessoa Jurídica'])],
            'documento' => 'required|string|max:14',
            'email_contratante' => 'required|email|max:60',
            'nome_contratante' => 'required|string|max:60'
        ];
    }
}
