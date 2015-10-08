<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tarefa;

class TarefasController extends Controller
{
    
    public function __construct(Tarefa $tarefa) {
        $this->tarefa = $tarefa;
    }
        
    public function index(){
        $tarefas = \App\Tarefa::paginate(4);
        return view('tarefas.index', compact('tarefas'));
    }
    
    
}
