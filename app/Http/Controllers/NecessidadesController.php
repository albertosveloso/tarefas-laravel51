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
        $projetoId= Projeto::lists('descricao', 'id');

        return view('necessidades.create', compact('projetoId'));
    }
    
    
    public function store(NecessidadeRequest $request)
    {
        //dd($request);
        
        $necessidade = $request->all();
        
        
        $necessidade->setAttribute('projeto_id', $request->find('projeto_selec'));
        
        $necessidade->save();
        
        
                 
        return redirect()->route('necessidades.index');
     
        
    }
   
}
