<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Necessidade extends Model
{
    protected $table = 'necessidades';
    
    use SoftDeletes; 

    protected $fillable = [
        'descricao',
        'prioridade',
        'apagado',
        'cancelado',
        'projeto_id'
    ];

    public function projeto()
    {
        //Consigo verificar a qual projeto a necessidade pertence
        //$necessidade = App\Necessidade::find(1);
        //$necessidade->projeto;
        return $this->belongsTo('App\Projeto');
    }

 }
