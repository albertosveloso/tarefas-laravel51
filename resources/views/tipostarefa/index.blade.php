@extends('template')

@section('content')

<h3 class="page-header" xmlns="http://www.w3.org/1999/html">Tipos de tarefa
    <a href="{{route('tipostarefa.create')}}" class="btn btn-primary novo">Criar tipo de tarefa</a>
</h3>

<div class="panel panel panel-primary">
    @foreach($tipostarefas as $tipotarefa)
    <div class="panel-heading" title="Criado em: {{$tipotarefa->created_at->format('d/m/Y h:i')}}">
        <span class="descricao">{{$tipotarefa->descricao}} - 
            @if($tipotarefa->cancelado)
            <b>Cancelado</b>
            @else
            <span>Ativo</span>
            @endif
        </span>
        <span class="glyphicon glyphicon-search"></span>
    <div class="acoes">
    <a href="{{route('tipostarefa.edit', ['id'=>$tipotarefa->id])}}" title="Editar"><span class="glyphicon glyphicon-cog"></span></a>
    <a class="excluir" onclick="return confirm('Deseja realmente remover o tipo de tarefa: {{$tipotarefa->descricao}} ?')" href="{{route('tipostarefa.destroy', ['id'=>$tipotarefa->id])}}" title="Excluir"><span class="glyphicon glyphicon-remove"></span></a>
    </div>
    </div>
    <br>
    @endforeach
    {!! $tipostarefas->render() !!} <!--paginacao do laravel, necessario usar ! ao inves de aspas para nao escapar html-->
</div>


@stop


