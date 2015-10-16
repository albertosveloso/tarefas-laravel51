<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projeto extends Model
{

    protected $table = 'projetos';
    
    use SoftDeletes; 

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

    public function necessidade()
    {
        //Projeto tem várias necessidades
        return $this->hasMany('App\Necessidade');
    }

}
