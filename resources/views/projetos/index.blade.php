@extends('template')

@section('content')

    <h3 class="page-header" xmlns="http://www.w3.org/1999/html">Projetos
        <a href="{{route('projetos.create')}}" class="btn btn-primary novo">Criar projeto</a>
    </h3>
    <div class="panel panel panel-primary">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Criado em</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            @foreach($projetos as $projeto)
                @if(!$projeto->apagado)
                <tr>
                    <td>{{$projeto->id}}</td>
                    <td>{{$projeto->descricao}}</td>
                    <td>{{$projeto->created_at->format('d/m/Y h:i')}}</td>
                    <td>{{ $projeto->cancelado }}</td>
                    <td><a href="{{route('projetos.edit', ['id'=>$projeto->id])}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('projetos.destroy', ['id'=>$projeto->id])}}" class="btn btn-default">Excluir</a></td>

                </tr>
                @endif
            @endforeach
        </table>

        {!! $projetos->render() !!} <!--paginacao do laravel, necessario usar ! ao inves de aspas para nao escapar html-->

    </div>
    </div>

@stop


