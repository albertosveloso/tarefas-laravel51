<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TiposTarefa extends Model
{
    use SoftDeletes; 
    
    protected $fillable = [
        'descricao',
        'apagado',
        'cancelado'
    ];
    
    
}
