<?php

namespace Repositories;

final class StatusPropriedadeRepository extends BaseRepository implements RepositoryInterface
{
    protected $class = \App\Models\StatusPropriedade::class;

    protected $storeRules = [
        'nome' => 'required|string|unique:status_propriedade|max:60'
    ];
}
