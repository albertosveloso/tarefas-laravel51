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
        
        $necessidades = \App\Necessidade::paginate(4);
        
        return view('necessidades.index', compact('necessidades'));
    }

    public function create()
    {
        $projetoId = Projeto::lists('descricao', 'id');
        return view('necessidades.create', compact('projetoId'));
    }
    
    
    public function store(NecessidadeRequest $request)
    {
        $this->necessidade->create($request->all());
        return redirect()->route('necessidades.index');
    }
    
    //Editar projeto
    public function edit($id)
    {
        $projetoId = Projeto::lists('descricao', 'id');

        $necessidade = $this->necessidade->find($id);

        return view('necessidades.edit', compact('necessidade', 'projetoId'));
    }

    public function update($id, NecessidadeRequest $request)
    {
        $this->necessidade->find($id)->update($request->all());
        return redirect()->route('necessidades.index');
    }
    
    
      //Excluir necessidade
    public function destroy($id)
    {
        $this->necessidade->find($id)->delete();
        return redirect()->route('necessidades.index');
    }

}
