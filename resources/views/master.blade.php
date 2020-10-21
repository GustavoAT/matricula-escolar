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

    <!-- Site Style -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <title>Escola Newton - @yield('title')</title>
</head>
<body>
    @section('header')
    <header class="jumbotron mb-0">
        <div class="row">
            <img id="header-bg" src="https://4.bp.blogspot.com/-08KK6RV14Fo/Wmm3uTFkTVI/AAAAAAAAaUI/PIu1SOLSdbErIGx6xEHj6h7zFK25CxalQCLcBGAs/s1600/Isaac%2BNewton%2B752%2BO%2BBaricentro%2Bda%2Bmente.png" alt="">
            <div class="pl-2">
                <h1 class="display-4">Escola Newton</h1>
                <p class="lead">Onde sua ação tem uma reação</p>
            </div>
        </div>

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
                    Rua Kepler nº 2342. Kensington-BA
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
                    escnewton@gmail.com
                </p>
            </div>
        </div>
    </footer>
    @show

</body>
</html>
