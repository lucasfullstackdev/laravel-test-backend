<?php

namespace App\Models;

class Contrato extends BaseModel
{
    protected $table = 'contratos';
    protected $fillable = [
        'id_propriedade',
        'tipo_pessoa',
        'documento',
        'email_contratante',
        'nome_contratante'
    ];

    public function propriedade()
    {
        return $this->belongsTo(Propriedade::class, 'id_propriedade');
    }
}
