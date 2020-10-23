<?php

namespace Repositories;

final class UfRepository extends BaseRepository implements RepositoryInterface
{
    protected $class = \App\Models\Uf::class;
    protected $storeRules = [
        'nome' => 'required|string|unique:uf|max:19',
        'sigla' => 'required|string|unique:uf|min:2|max:2'
    ];

    protected $updateRules = [
        'nome' => 'sometimes|required|string|unique:uf|max:19',
        'sigla' => 'sometimes|required|string|unique:uf|min:2|max:2'
    ];
}
