@extends('template')

@section('content')

    <h3 class="page-header" xmlns="http://www.w3.org/1999/html">Status de tarefas
        <a href="{{route('statustarefa.create')}}" class="btn btn-primary novo">Criar status de tarefa</a>
    </h3>

    <div class="panel panel panel-primary">
        @foreach($statustarefas as $statustarefa)
            @if(!$statustarefa->apagado)
                <div class="panel-heading">
                <span class="descricao" title="Criado em: {{$statustarefa->created_at->format('d/m/Y h:i')}}">{{$statustarefa->descricao}} - ID: {{ $statustarefa->id }}</span>
                    <span class="status">Status:
                    @if($statustarefa->cancelado)
                        <b>Cancelado</b>
                    @else
                        <span>Ativo</span>
                    @endif
                    </span>
            </div>
                <div class="panel-body">
                    <p>
                     <a href="{{route('statustarefa.edit', ['id'=>$statustarefa->id])}}"
                         class="btn btn-primary">Editar</a>
                      <a class="btn btn-default excluir" onclick="return confirm('Deseja realmente remover o tipo de tarefa: {{$statustarefa->descricao}} ?')" href="{{route('statustarefa.destroy', ['id'=>$statustarefa->id])}}">Excluir</a>
                      </p>

            </div>
            @endif
        @endforeach
        {!! $statustarefas->render() !!} <!--paginacao do laravel, necessario usar ! ao inves de aspas para nao escapar html-->
    </div>

@stop


