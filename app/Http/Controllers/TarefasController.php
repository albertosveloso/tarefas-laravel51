<?php

namespace App\Http\Controllers;
use App\Http\Requests\TarefaRequest;
use App\Http\Controllers\Controller;
use App\Tarefa;

class TarefasController extends Controller
{
    
    public function __construct(Tarefa $tarefa) {
        $this->tarefa = $tarefa;
    }
        
    public function index(){
        
        $tarefas = $this->tarefa->orderby('id', 'desc')->paginate(9);
        //$tarefas = \App\Tarefa::paginate(4);
        return view('tarefas.index', compact('tarefas'));
    }
    
    public function create()
    {
        $necessidadeId = \App\Necessidade::lists('descricao', 'id');
        $statustarefaId = \App\StatusTarefa::lists('descricao', 'id');
        $tipostarefaId = \App\TiposTarefa::lists('descricao', 'id');
        $userId = \App\User::lists('name', 'id');
        return view('tarefas.create', compact('necessidadeId', 'statustarefaId', 'tipostarefaId', 'userId'));
    }
    
    public function store(TarefaRequest $request)
    {
        $this->tarefa->create($request->all());
        return redirect()->route('tarefas.index');
    }
    
    public function edit($id)
    {
        $necessidadeId = \App\Necessidade::lists('descricao', 'id');
        $statustarefaId = \App\StatusTarefa::lists('descricao', 'id');
        $tipostarefaId = \App\TiposTarefa::lists('descricao', 'id');
        $userId = \App\User::lists('name', 'id');
        $tarefa = $this->tarefa->find($id);
        return view('tarefas.edit', compact('tarefa','necessidadeId', 'statustarefaId', 'tipostarefaId', 'userId'));
    }

    public function update($id, TarefaRequest $request)
    {
        $this->tarefa->find($id)->update($request->all());
        return redirect()->route('tarefas.index');
    }
    
    public function destroy($id)
    {
        $this->tarefa->find($id)->delete();
        return redirect()->route('tarefas.index');
    }


    
}
