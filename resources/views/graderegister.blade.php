@extends('master')

@section('title', 'Cadastro')

@section('navoptions')
<div class="navbar-nav ml-auto">
    <a class="nav-link" href="#">Perfil do desenvolvedor</a>
    <a class="nav-link active" href="#">Cadastro</a>
</div>
@endsection

@section('content')
<section class="px-3 pt-2">
    <h2>Cadastrar classe</h2>
    <form method="POST">
        @csrf
        <div class="form-group row">
            <label for="gradename" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-3">
                <input type="text" name="name" class="form-control" id="gradename" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="gradedescription" class="col-sm-2 col-form-label">Descrição</label>
            <div class="col-sm-3">
                <textarea name="description" rows="4" cols="30" class="form-control" id="gradedescription" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="nvacancy" class="col-sm-2 col-form-label">Quantidade de vagas</label>
            <div class="col-sm-3">
                <input type="number" name="vacancy" class="form-control" id="nvacancy" min="0" required>
            </div>

        </div>
        <button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
    </form>
</section>
@endsection
