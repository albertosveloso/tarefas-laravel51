<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Login - Rascunho de tarefas </title>
    <link href="{{ asset('img/terminal.png') }}" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    {{--<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">--}}
    <link href="{{ asset('css/login.css')}}"  rel="stylesheet">
    <script src="{{ asset('js/ie-emulation-modes-warning.js')}}"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <p id="logo-login">Rascunho de Tarefas</p>
                <form class="form-signin" method="post" action="/auth/login">

                    {!! csrf_field() !!} <!--Segurança com token-->

                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"
                           placeholder="exemplo@email.com">
                    <input type="password" name="password" id="password" class="form-control" placeholder="password">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" name="remember">Continuar conectado
                    </label>
                    <!--<a href="#" class="pull-right need-help">Não consegue entrar? </a><span class="clearfix"></span>-->
                </form>
            </div>
            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            @endif
            <a href="/auth/register" class="text-center new-account">Criar conta Rascunho de tarefas </a>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery1.11.2.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{ asset('js/holder.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('js/ie10-viewport-bug-workaround.js')}}"></script>

</body>
</html>