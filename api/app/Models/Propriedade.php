<?php

namespace App\Models;

class Propriedade extends BaseModel
{
    protected $table = 'propriedades';
    protected $fillable = [
        'email_proprietario',
        'complemento',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'id_uf'
    ];
}
