<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Escola Newton - @yield('title')</title>
</head>
<body>
    @section('header')
    <header class="jumbotron mb-0">
        <h1 class="display-4">Escola Newton</h1>
        <p class="lead">Onde sua ação tem uma reação</p>
    </header>
    @show

    @section('navbar')
    <nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm">
        <div class="navbar-nav">
            <a class="nav-link" href="/">Início</a>
            <a class="nav-link" href="<?php echo url()->previous();?>">Voltar</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @yield('navoptions')
        </div>
    </nav>
    @show

    @yield('content')

    @section('footer')
    <footer class="px-3 pt-2 bg-dark text-light">
        <div class="row">
            <div class="col-md-4">
                <strong>Endereço:</strong>
                <p>
                    Rua tal tal tal n 2342 bairo cidade BA
                </p>
            </div>
            <div class="col-md-4">
                <strong>Telefone:</strong>
                <p>
                    (21) 2345-9764
                </p>
            </div>
            <div class="col-md-4">
                <strong>E-mail:</strong>
                <p>
                    sdakjh@gmail.com
                </p>
            </div>
        </div>
    </footer>
    @show

</body>
</html>
