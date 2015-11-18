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
    
    public function relatorioresponsavel()
    {
       $query = \DB::table('tarefas')
            ->join('users', 'users.id', '=', 'tarefas.user_id')
            ->orderBy('users.name', 'asc')  
            ->select(
                    'tarefas.id as codtarefa',
                    'tarefas.descricao as tarefa',
                    'tarefas.created_at as datacadastro',
                    'users.id as codresponsavel',
                    'users.name as responsavel'
                     )
            ->get();
        
        return view('tarefas.relatorioresp', compact('query'));
    }
    
    public function relatoriotarproj()
    {
       $query = \DB::table('tarefas')
            ->join('necessidades', 'necessidades.id', '=', 'tarefas.necessidade_id')
            ->join('projetos', 'projetos.id', '=', 'necessidades.projeto_id')
            ->select(
                    'projetos.id as codprojeto',
                    'projetos.descricao as projeto',
                    'tarefas.id as codtarefa',
                    'tarefas.descricao as tarefa', 
                    'tarefas.created_at as datacadastro'
                    )
            ->orderBy('projetos.descricao', 'asc')   
            ->get();
        
        return view('tarefas.relatoriotarproj', compact('query'));
    }
    
    public function relatoriostatus()
    {
       $query = \DB::table('tarefas')
            ->join('status_tarefas', 'status_tarefas.id', '=', 'tarefas.statustarefa_id')
            ->select(
                    'status_tarefas.descricao as status',
                    'tarefas.id as codtarefa',
                    'tarefas.descricao as tarefa',
                    'tarefas.tempoestimado as tempoestimado',
                    'tarefas.tempogasto as tempogasto',
                    'tarefas.created_at as datacadastro'
                    )
            ->orderBy('status_tarefas.descricao', 'desc')   
            ->get();
       
        return view('tarefas.relatoriostatus', compact('query'));
    }
    
    
}

