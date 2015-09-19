<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Projeto;
use App\Http\Controllers\Controller;

class ProjetosController extends Controller
{
    private $projeto;

    //DI - injeção de dependência
    //Toda vez que chamarmos o controller o laravel vai instanciar um objeto do tipo projeto
    public function __construct(Projeto $projeto)
    {
        $this->projeto = $projeto;
    }

    public function index()
    {
        $projetos = $this->projeto->paginate(7); //o paginate faz a paginacao!!!!
        return view('projetos.index', compact('projetos')); //Enviando projetos para view
    }
}
