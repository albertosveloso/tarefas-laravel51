<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TiposTarefaRequest;
use App\TiposTarefa;

class TiposTarefaController extends Controller
{
    private $tiposTarefa;
    
    public function __construct(TiposTarefa $tiposTarefa) 
    {
        $this->tiposTarefa = $tiposTarefa;
    }
    
    public function index()
    {
        $tipostarefas = $this->tiposTarefa->orderby('id', 'desc')->paginate(8);
        return view('tipostarefa.index', compact('tipostarefas'));
    }

    public function create()
    {
        return view('tipostarefa.create');
    }

    public function store(TiposTarefaRequest $request)
    {
        $this->tiposTarefa->create($request->all());
        return redirect()->route('tipostarefa.index');
    }

    public function edit($id)
    {
        $tipostarefa = $this->tiposTarefa->find($id);
        return view('tipostarefa.edit', compact('tipostarefa'));
    }

    public function update(TiposTarefaRequest $request, $id)
    {
        $this->tiposTarefa->find($id)->update($request->all());
        return redirect()->route('tipostarefa.index');
    }

    public function destroy($id)
    {
        $this->tiposTarefa->find($id)->delete();
        return redirect()->route('tipostarefa.index');
    }
}
