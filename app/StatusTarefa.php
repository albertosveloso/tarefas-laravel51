<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusTarefa extends Model
{
    protected $fillable = [
        'descricao',
        'apagado',
        'cancelado'
    ];

}
