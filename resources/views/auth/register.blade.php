<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="#">
        <title>Criar conta - Rascunho de tarefas </title>
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
                        <p id="logo-login">Rascunho de tarefas</p>
                        <span id="login-mensagem">Crie sua conta Rascunho de tarefas</span>
                        <form class="form-signin" method="POST" action="/auth/register">
                            {!! csrf_field() !!}
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome">
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="seuemail@email.com">
                                <input type="password" class="form-control" name="password" placeholder="password">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="confirme a senha">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Criar conta</button>
                        </form>
                    </div>
                    @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    @endif
                    <a href="/auth/login" class="text-center new-account">Voltar para login </a>
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