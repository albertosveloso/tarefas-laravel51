@extends('template')

@section('content')

    <h3 class="page-header" xmlns="http://www.w3.org/1999/html">Editar projeto:</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <div class="panel panel panel-primary">
        <!--Usando illuminate, com rotas nomeadas podemos usar o route apontando para a acao que vai salvar/criar-->
        <!-- o Form:model faz o bind ele já popula o form conforme o que temos no model-->
        {!! Form::model($projeto, ['route'=>['projetos.update', $projeto->id],'method' => 'put']) !!}

        <!-- Formulario fica em um arquivo separado para ser reaproveitado-->
        @include('projetos/_form')

        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            <a href="{{route('projetos.index')}}" class="btn btn-default">Voltar</a>
        </div>

        {!! Form::close() !!}
    </div>
    </div>

@stop


