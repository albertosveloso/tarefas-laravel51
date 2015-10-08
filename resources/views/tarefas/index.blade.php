@extends('template')

@section('content')

    <h3 class="page-header" xmlns="http://www.w3.org/1999/html">Tarefas
        <a href="{{route('tarefas.create')}}" class="btn btn-primary novo">Criar tarefa</a>
    </h3>

    <div class="panel panel panel-primary">
        @foreach($tarefas as $tarefa)
            @if(!$tarefa->apagado)
                <div class="panel-heading">
                <span class="descricao" title="Criado em: {{$tarefa->created_at->format('d/m/Y h:i')}}">{{$tarefa->descricao}} - ID: {{ $tarefa->id }}</span>
                    <span class="status">Status:
                    @if($tarefa->cancelado)
                        <b>Cancelado</b>
                    @else
                        <span>Ativo</span>
                    @endif
                    </span>
            </div>
                <div class="panel-body">
                    <p><b>Tempo estimado: </b>{{$tarefa->tempoestimado}}</p>
                    
                     @if($tarefa->user)
                     <p><b>Código do usuário: </b>{{$tarefa->user_id}}</p>
                     <p><b>Nome: </b>{{$tarefa->user->name}}</p>
                    @endif
                    
                    
                    <p>
                     <a href="{{route('necessidades.edit', ['id'=>$tarefa->id])}}"
                         class="btn btn-primary">Editar</a>
                      <a class="btn btn-default excluir" onclick="return confirm('Deseja realmente remover a necessidade: {{$tarefa->descricao}} ?')" href="{{route('tarefas.destroy', ['id'=>$tarefa->id])}}">Excluir</a>
                      </p>

            </div>
            @endif
        @endforeach
        {!! $tarefas->render() !!} <!--paginacao do laravel, necessario usar ! ao inves de aspas para nao escapar html-->
    </div>

@stop


