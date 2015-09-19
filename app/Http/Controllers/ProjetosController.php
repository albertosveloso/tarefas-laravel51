<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProjetoRequest;
use Illuminate\Http\Request;
use App\Projeto;


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

    public function create()
    {
        return view('projetos.create');
    }

    //Grava os dados no banco
    public function store(ProjetoRequest $request)
    {
        //A request ProjetoRequest tem as validacoes que criamos., pasta http / requests /
        //Recebe request e intercepta os dados enviados via formulario
        //dd($request->all()); //o dd mata a aplicacao e mostra resultado

        $this->projeto->create($request->all());

        return redirect()->route('projetos.index');

    }
}
