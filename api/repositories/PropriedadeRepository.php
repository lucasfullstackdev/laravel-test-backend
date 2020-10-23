<?php

namespace Repositories;

final class PropriedadeRepository extends BaseRepository implements RepositoryInterface
{
    protected $class = \App\Models\Propriedade::class;

    protected $storeRules = [
        'email_proprietario' => 'required|email|max:60',
        'logradouro' => 'required|string|max:100',
        'numero' => 'sometimes|max:5',
        'complemento' => 'sometimes|max:60',
        'bairro' => 'required|string|max:30',
        'cidade' => 'required|string|max:60',
        'id_uf' => 'required|exists:uf,id',
        'id_status_propriedade' => 'required|exists:status_propriedade,id'
    ];
}
