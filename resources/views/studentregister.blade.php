@extends('master')

@section('title', 'Matrícula')

@section('navoptions')
<div class="navbar-nav ml-auto">
    <a class="nav-link" href="/login">Entrar</a>
    <a class="nav-link" href="/classes">Classes</a>
    <a class="nav-link active" href="">Matrícula</a>
</div>
@endsection

@section('content')
<section class="px-3 py-2">
    <h2>Matrícula</h2>

    @isset($message)
    <p>{{ $message }}</p>    
    @endisset

    @empty($message)
    <form action="/students" method="POST">
        @csrf
        <div class="form-group row">
            <label for="studentname" class="col-sm-2 col-form-label">Nome completo</label>
            <div class="col-sm-3">
                <input type="text" name="name" class="form-control" id="studentname" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="studentcpf" class="col-sm-2 col-form-label">CPF</label>
            <div class="col-sm-3">
                <input type="text" name="cpf" class="form-control" id="studentcpf" placeholder="12345678910" pattern="[0-9]{11}" maxlength="11" autocomplete="off" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="studentbirthday" class="col-sm-2 col-form-label">Data de nascimento</label>
            <div class="col-sm-3">
                <input type="date" name="birthday" class="form-control" id="studentbirthday" min="1920-01-01" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Sexo</label>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="studentgender1" value="M" required>
                    <label class="form-check-label" for="studentgender1">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="studentgender2" value="F" required>
                    <label class="form-check-label" for="studentgender2">Feminino</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gradeselect" class="col-sm-2 col-form-label">Classe</label>
            <div class="col-sm-3">
                <select class="form-control" name="grade" id="gradeselect" required>
                    @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{$grade->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Matricular</button>
    </form>    
    @endempty
    
</section>
@endsection
