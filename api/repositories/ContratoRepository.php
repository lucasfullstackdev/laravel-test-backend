<?php

namespace Repositories;

use Illuminate\Validation\Rule;

final class ContratoRepository extends BaseRepository implements RepositoryInterface
{
    protected $class = \App\Models\Contrato::class;
    
    public function __construct()
    {
        $storeRules = [
            'id_propriedade' => 'required|exists:propriedades,id',
            'tipo_pessoa' => ['required', Rule::in(['Pessoa Física', 'Pessoa Jurídica'])],
            'documento' => 'required|string|max:14',
            'email_contratante' => 'required|email|max:60',
            'nome_contratante' => 'required|string|max:60'
        ];

        $this->setStoreRules($storeRules);
    }
}
