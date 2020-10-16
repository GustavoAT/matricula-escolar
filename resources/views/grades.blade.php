@extends('master')

@section('title', 'Classes')

@section('navoptions')
<div class="navbar-nav ml-auto">
    <a class="nav-link" href="#">Entrar</a>
    <a class="nav-link active" href="#">Classes</a>
    <a class="nav-link" href="#">Matrícula</a>
</div>
@endsection

@section('content')
<section class="px-3 py-2">
    <h2>Classes</h2>
    @forelse($grades as $grade)
    <div class="col-sm-6 col-md-4 col-xl-3">
        <div class="card">
            <img src="{{$grade->photo}}" class="card-img-top" style="maxheight: 150px;width: 100%;">
            <div class="card-body">
                <h5 class="card-title">{{$grade->name}}</h5>
                <p class="card-text">{{$cgrade->description}}</p>
            </div>
        </div>
    </div>
    @empty
    <p>Desculpe, não temos classes cadastradas ainda.</p>
    @endforelse

</section>
@endsection
