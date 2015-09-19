<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'descricao',
        'apagado',
        'cancelado'
    ];






    public function users()
    {
        //Já informamos que temos diversos usuário por projeto, depois da virgula informamos
        //A tabela que esta fazendo o relacionamento ManytoMany
        return $this->belongsToMany('App\User', 'users_projetos');

    }

}
