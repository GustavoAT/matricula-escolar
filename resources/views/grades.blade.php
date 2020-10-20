@extends('master')

@section('title', 'Classes')

@section('navoptions')
<div class="navbar-nav ml-auto">
    <a class="nav-link" href="/login">Entrar</a>
    <a class="nav-link active" href="">Classes</a>
    <a class="nav-link" href="/matricula">Matrícula</a>
</div>
@endsection

@section('content')
<section class="px-3 py-2">
    <h2>Classes</h2>
    <div class="row">
        @forelse($grades as $grade)
        <div class="col-sm-6 col-md-4 col-xl-3 my-2">
            <div class="card">
                <img src="{{$grade->photo}}" class="card-img-top" style="max-height: 150px;width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{$grade->name}}</h5>
                    <p class="card-text">{{$grade->description}}</p>
                </div>
            </div>
        </div>
        @empty
        <p>Desculpe, não temos classes cadastradas ainda.</p>
        @endforelse
    </div>

</section>
@endsection
