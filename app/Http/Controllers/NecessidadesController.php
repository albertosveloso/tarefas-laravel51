<?php

namespace App\Http\Controllers;
use App\Http\Requests\NecessidadeRequest;
use App\Necessidade;
use App\Projeto;

class NecessidadesController extends Controller
{
    private $necessidade;

    public function __construct(Necessidade $necessidade)
    {
        $this->necessidade = $necessidade;
    }

    public function index()
    {
        $necessidades = $this->necessidade->orderby('projeto_id', 'desc')->paginate(4);
        return view('necessidades.index', compact('necessidades'));
    }

    public function create()
    {
        $projetoIds= Projeto::lists('descricao', 'id');

        return view('necessidades.create', compact('projetoIds'));
    }

    //Grava os dados no banco
    public function store(NecessidadeRequest $request)
    {
        $necessidadeNova =  $this->necessidade->create($request->all());

        $necessidadeNova->projetos()->attach($request->input('projeto_list'));

        return redirect()->route('necessidades.index');
    }

}
