<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposTarefa extends Model
{
    protected $fillable = [
        'descricao',
        'apagado',
        'cancelado'
    ];
}
