<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Classe usada como base para as models
 */
abstract class BaseModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public final function getCreatedAtAttribute($created_at)
    {
        return $this->dateToBr($created_at);
    }

    public final function getUpdatedAtAttribute($updated_at)
    {
        return $this->dateToBr($updated_at);
    }

    public final function getDeletedAtAttribute($deleted_at)
    {
        return $this->dateToBr($deleted_at);
    }

    /**
     * Converter as datas para formato brasileiro
     *
     * @param [type] $date
     * @return void
     */
    private final function dateToBr($date)
    {
        if (isset($date))
            return date('d/m/Y h:m:s', strtotime($date));
    }
}
