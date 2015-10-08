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
    
    public function necessidade()
    {
        return $this->belongsTo('App\Necessidade');
    }
    
    public function statustarefa()
    {
        return $this->belongsTo('App\StatusTarefa');
    }
    
    public function tipostarefa()
    {
        return $this->belongsTo('App\TiposTarefa');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
