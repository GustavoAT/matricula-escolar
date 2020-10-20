@extends('master')

@section('title', 'Perfil do desenvolvedor')

@section('navoptions')
<div class="navbar-nav ml-auto">
    <a class="nav-link active" href="">Perfil do desenvolvedor</a>
    <a class="nav-link" href="/classes/cadastrar">Cadastro</a>
</div>
@endsection

@section('content')
<section class="px-3 pt-2">
        <h2>Perfil do desenvolvedor</h2>
        <div class="form-group row">
            <label for="staticname" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" 
                        id="staticname" value="Gustavo Teixeira">
            </div>
        </div>
        <div class="form-group row">
            <label for="statictel" class="col-sm-2 col-form-label">Telefone</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" 
                        id="statictel" value="(71) 99933-2313">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" 
                id="staticEmail" value="gustavoalmeidateixeira@gmail.com">
            </div>
        </div>
    </section>
@endsection
