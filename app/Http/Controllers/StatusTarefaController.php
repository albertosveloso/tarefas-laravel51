<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StatusTarefaRequest;
use App\StatusTarefa;

class StatusTarefaController extends Controller
{
    private $statusTarefa;
    
    public function __construct(StatusTarefa $statusTarefa) 
    {
        $this->statusTarefa = $statusTarefa;
    }
    
    public function index()
    {
        $statustarefas = $this->statusTarefa->orderby('id', 'desc')->paginate(4);
        return view('statustarefa.index', compact('statustarefas'));
    }

    public function create()
    {
        return view('statustarefa.create');
    }

    public function store(StatusTarefaRequest $request)
    {
        $this->statusTarefa->create($request->all());
        return redirect()->route('statustarefa.index');
    }

    public function edit($id)
    {
        $statustarefa = $this->statusTarefa->find($id);
        return view('statustarefa.edit', compact('statustarefa'));
    }

    public function update(StatusTarefaRequest $request, $id)
    {
        $this->statusTarefa->find($id)->update($request->all());
        return redirect()->route('statustarefa.index');
    }

    public function destroy($id)
    {
        $this->statusTarefa->find($id)->delete();
        return redirect()->route('statustarefa.index');
    }
    
    
    
}
