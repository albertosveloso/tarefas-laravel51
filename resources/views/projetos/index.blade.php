@extends('template')

@section('content')

    <h3 class="page-header" xmlns="http://www.w3.org/1999/html">Projetos
        <a class="btn btn-primary novo" onClick="document.location='novo_projeto'">Novo projeto</a>
    </h3>
    <div class="panel panel panel-primary">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Data Criação</th>
                <th>Ações</th>
            </tr>
            @foreach($projetos as $projeto)
                <tr>
                    <td>{{$projeto->id}}</td>
                    <td>{{$projeto->descricao}}</td>
                    <td>{{$projeto->created_at}}</td>
                </tr>
            @endforeach
        </table>

        {!! $projetos->render() !!} <!--paginacao do laravel, necessario usar ! ao inves de aspas para nao escapar html-->

    </div>
    </div>

@stop


