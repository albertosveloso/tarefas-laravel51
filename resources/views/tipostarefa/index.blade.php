@extends('template')

@section('content')

<h3 class="page-header" xmlns="http://www.w3.org/1999/html">Tipos de tarefa
    <a href="{{route('tipostarefa.create')}}" class="btn btn-primary novo">Criar tipo de tarefa</a>
</h3>

<div class="panel panel panel-primary">
    @foreach($tipostarefas as $tipotarefa)
    <div class="panel-heading">
        <span class="descricao" title="Criado em: {{$tipotarefa->created_at->format('d/m/Y h:i')}}">{{$tipotarefa->descricao}} - ID: {{ $tipotarefa->id }}</span>
        <span class="status">Status:
            @if($tipotarefa->cancelado)
            <b>Cancelado</b>
            @else
            <span>Ativo</span>
            @endif
        </span>
    </div>
    <div class="panel-body">
        <p>
            <a href="{{route('tipostarefa.edit', ['id'=>$tipotarefa->id])}}"
               class="btn btn-primary">Editar</a>
            <a class="btn btn-default excluir" onclick="return confirm('Deseja realmente remover o tipo de tarefa: {{$tipotarefa->descricao}} ?')" href="{{route('tipostarefa.destroy', ['id'=>$tipotarefa->id])}}">Excluir</a>
        </p>

    </div>
    @endforeach
    {!! $tipostarefas->render() !!} <!--paginacao do laravel, necessario usar ! ao inves de aspas para nao escapar html-->
</div>

@stop


