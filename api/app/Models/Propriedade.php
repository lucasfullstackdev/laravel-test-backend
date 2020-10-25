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
        'id_uf',
        'id_status_propriedade'
    ];

    public function uf()
    {
        return $this->belongsTo(Uf::class, 'id_uf');
    }

    public function contrato()
    {
        return $this->hasOne(Contrato::class, 'id_propriedade');
    }

    public function status()
    {
        return $this->belongsTo(StatusPropriedade::class, 'id_status_propriedade');
    }
}
