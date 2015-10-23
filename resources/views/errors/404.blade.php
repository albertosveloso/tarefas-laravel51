<!DOCTYPE html>
<html>
    <head>
        <title>404 - Página não encontrada</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
                margin-top: 20px;
            }

            .title {
                font-weight: bold;
                font-size: 40px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">404 - Página não encontrada</div>
                <img src="{{ asset('img/tv-velha.jpg') }}">
            </div>
        </div>
    </body>
</html>
