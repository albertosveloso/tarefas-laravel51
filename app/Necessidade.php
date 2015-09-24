<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Necessidade extends Model
{
    protected $fillable = [
        'projeto_id',
        'descricao',
        'prioridade',
        'apagado',
        'cancelado'
    ];

    public function projeto()
    {
        //Consigo verificar a qual projeto a necessidade pertence
        //$necessidade = App\Necessidade::find(1);
        //$necessidade->projeto;
        return $this->belongsTo('App\Projeto');
    }

 }
