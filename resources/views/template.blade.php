<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{ asset('img/terminal.png') }}" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/default.css')}}" rel="stylesheet">
    <script src="{{ asset('js/ie-emulation-modes-warning.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/tarefas" title="Voltar para tarefas">Rascunho de tarefas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="auth/logout">Sair</a></li>
            </ul>
            <!--
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Pesquisar...">
            </form>
            -->
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="/projetos">Projetos</a></li>
                <li><a href="/necessidades">Necessidades</a></li>
                <li><a href="/tarefas">Tarefas</a></li>
                <li><a href="/tipostarefa">Tipos de tarefas</a></li>
                <li><a href="/statustarefa">Status de tarefas</a></li>
                <hr>
            </ul>
            <hr/>

            <!--            <h3>Projetos</h3>-->
            <!--            <fieldset>-->
            <!--                <ul class="nav nav-sidebar">-->
            <!--                    <li><a href="">Todos</a></li>-->
            <!--                    <li><a href="">Família</a></li>-->
            <!--                    <li><a href="">Trabalho</a></li>-->
            <!--                    <li><a href="">Estudo</a></li>-->
            <!--                    <li><a href="">Carro</a></li>-->
            <!--                    <li><a href="">Casa</a></li>-->
            <!--                </ul>-->
        </div>
        </fieldset>
    </div>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    @yield('content')

</div>

        <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/jquery1.11.2.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{ asset('js/holder.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('js/ie10-viewport-bug-workaround.js')}}"></script>

</body>
</html>