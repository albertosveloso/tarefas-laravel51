@extends('template')

@section('content')

    <h3 class="page-header" xmlns="http://www.w3.org/1999/html">Criar tipo de tarefa<small> - (*) Indica um campo obrigatório</small>
    </h3>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <div class="panel panel panel-primary">
        <!--Usando illuminate, com rotas nomeadas podemos usar o route apontando para a acao que vai salvar/criar-->
        {!! Form::open(['route' => 'tipostarefa.store','method' => 'post']) !!}

        @include('tipostarefa/_form')

        <div class="form-group">
            {!! Form::submit('Criar tipo de tarefa', ['class'=>'btn btn-primary']) !!}
            <a href="{{route('tipostarefa.index')}}" class="btn btn-default">Voltar</a>
        </div>

        {!! Form::close() !!}
    </div>
    </div>

@stop


