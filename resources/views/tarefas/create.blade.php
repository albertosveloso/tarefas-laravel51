@extends('template')

@section('content')

    <h3 class="page-header" xmlns="http://www.w3.org/1999/html">Criar tarefa<small> - (*) Indica um campo obrigatório</small>
    </h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <div class="panel panel panel-primary">
        {!! Form::open(['route' => 'tarefas.store','method' => 'post']) !!}

        @include('tarefas/_form')

        <div class="form-group">
            {!! Form::submit('Criar tarefa', ['class'=>'btn btn-primary']) !!}
            <a href="{{route('tarefas.index')}}" class="btn btn-default">Voltar</a>
        </div>

        {!! Form::close() !!}
    </div>
    </div>

@stop


