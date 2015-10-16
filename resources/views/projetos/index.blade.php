@extends('template')

@section('content')

<h3 class="page-header" xmlns="http://www.w3.org/1999/html">Projetos
    <a href="{{route('projetos.create')}}" class="btn btn-primary novo">Criar projeto</a>
</h3>

<div class="panel panel panel-primary">
    @foreach($projetos as $projeto)
    <div class="panel-heading">
        <span class="descricao" title="Criado em: {{$projeto->created_at->format('d/m/Y h:i')}}">{{$projeto->descricao}} - ID: {{ $projeto->id }}</span>
        <span class="status">Status:
            @if($projeto->cancelado)
            <b>Cancelado</b>
            @else
            <span>Ativo</span>
            @endif
        </span>
    </div>
    <div class="panel-body">
        @unless($projeto->users->isEmpty())
        Responsáveis:
        <ul>
            @foreach($projeto->users as $user)
            <li>
                <span>{{ $user->name }}</span><br/>
            </li>
            @endforeach
        </ul>
        @endunless
        <p>
            <a href="{{route('projetos.edit', ['id'=>$projeto->id])}}"
               class="btn btn-primary">Editar</a>
            <a class="btn btn-default excluir" onclick="return confirm('Deseja realmente remover o projeto: {{$projeto->descricao}} ?')" href="{{route('projetos.destroy', ['id'=>$projeto->id])}}">Excluir</a>
        </p>

    </div>
    @endforeach
    {!! $projetos->render() !!} <!--paginacao do laravel, necessario usar ! ao inves de aspas para nao escapar html-->
</div>

@stop


