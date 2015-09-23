<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProjetoRequest;
use Illuminate\Http\Request;
use App\Projeto;
use App\User;


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
        $projetos = $this->projeto->orderby('id','desc')->paginate(4); //o paginate faz a paginacao!!!!
        return view('projetos.index', compact('projetos')); //Enviando projetos para view
    }

    public function create()
    {

        $userIds = User::lists('name', 'id');

        return view('projetos.create', compact('userIds'));
    }

    //Grava os dados no banco
    public function store(ProjetoRequest $request)
    {
        //A request ProjetoRequest tem as validacoes que criamos., pasta http / requests /
        //Recebe request e intercepta os dados enviados via formulario
        //dd($request->all()); //o dd mata a aplicacao e mostra resultado

        $projetoNovo =  $this->projeto->create($request->all());

        $projetoNovo->users()->attach($request->input('user_list'));

        return redirect()->route('projetos.index');
    }

    //Editar projeto
    public function edit($id)
    {
        $userIds = User::lists('name', 'id');

        $projeto = $this->projeto->find($id);

        return view('projetos.edit', compact('projeto', 'userIds'));
    }

    public function update($id, ProjetoRequest $request)
    {
        $this->projeto->find($id)->update($request->all());

        $projetoAtualizado = $this->projeto->find($id);

        $projetoAtualizado->users()->sync($request->input('user_list'));

        return redirect()->route('projetos.index');
    }

    //Excluir projeto
    public function destroy($id)
    {
        $this->projeto->find($id)->delete();
        return redirect()->route('projetos.index');
    }
}
