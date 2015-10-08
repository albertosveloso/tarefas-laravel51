<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = 'tarefas';
    
    protected $fillable = [
        'descricao',
        'apagado',
        'cancelado',
        'tempoestimado',
        'tempogasto',
        'necessidade_id',
        'statustarefa_id',
        'tipostarefa_id',
        'user_id'
    ];
    
    
}
