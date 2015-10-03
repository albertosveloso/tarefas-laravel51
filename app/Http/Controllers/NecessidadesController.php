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
        $necessidades = \App\Necessidade::with('projeto')->first()->paginate(4);
        return view('necessidades.index', compact('necessidades'));
    }

    public function create()
    {
        $projetoId= Projeto::lists('descricao', 'id');
        return view('necessidades.create', compact('projetoId'));
    }
    
    
    public function store(NecessidadeRequest $request)
    {
        //@todo 02-10-2015 13:33       
        $this->necessidade->create($request->all());
        $projeto = new Projeto;
        $projeto->fill($request->input('projeto_selec'));
        $this->necessidade->projetos()->save($projeto);
        
        return redirect()->route('necessidades.index');

    }

}
