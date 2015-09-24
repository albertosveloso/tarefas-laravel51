@extends('template')

@section('content')

    <h3 class="page-header" xmlns="http://www.w3.org/1999/html">Necessidades
        <a href="{{route('necessidades.create')}}" class="btn btn-primary novo">Criar necessidade</a>
    </h3>

    <div class="panel panel panel-primary">
        @foreach($necessidades as $necessidade)
            @if(!$necessidade->apagado)
                <div class="panel-heading">
                <span class="descricao" title="Criado em: {{$necessidade->created_at->format('d/m/Y h:i')}}">{{$necessidade->descricao}} - ID: {{ $necessidade->id }}</span>
                    <span class="status">Status:
                    @if($necessidade->cancelado)
                        <b>Cancelado</b>
                    @else
                        <span>Ativo</span>
                    @endif
                    </span>
            </div>
                <div class="panel-body">
                    <p><b>Prioridade:</b> {{$necessidade->prioridade}}</p>
                    <p><b>Projeto</b>: {{$necessidade->projeto->descricao}} - Código: {{$necessidade->projeto->id}} </p>

                    {{--   <p>
                     <a href="{{route('necessidade.edit', ['id'=>$necessidade->id])}}"
                         class="btn btn-primary">Editar</a>
                      <a class="btn btn-default excluir" onclick="return confirm('Deseja realmente remover a necessidade: {{$necessidade->descricao}} ?')" href="{{route('necessidade.destroy', ['id'=>$necessidade->id])}}">Excluir</a>
                      </p>--}}

            </div>
            @endif
        @endforeach
        {!! $necessidades->render() !!} <!--paginacao do laravel, necessario usar ! ao inves de aspas para nao escapar html-->
    </div>

@stop


