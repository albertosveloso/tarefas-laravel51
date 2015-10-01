<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{

    protected $table = 'projetos';

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

    /*Pegar a lista de usuários associados a um projeto*/
    public function getUserListAttribute()
    {
        return $this->users->lists('id')->all();
    }

    public function necessidades()
    {
        //Projeto tem várias necessidades
        return $this->hasMany('App\Necessidade', 'id', 'projeto_id');
    }

}
