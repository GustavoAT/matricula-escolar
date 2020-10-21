@extends('master')

@section('title', 'Apresentação')

@section('navoptions')
<div class="navbar-nav ml-auto">
    <a class="nav-link" href="/login">Entrar</a>
    <a class="nav-link" href="/classes">Classes</a>
    <a class="nav-link" href="/matricula">Matrícula</a>
</div>
@endsection

@section('content')
<section class="px-3 pt-2">
    <h2>Conheça a escola</h2>
    <p class="text-justify">
        Sua principal aula, Princípios Matemáticos da Filosofia Natural é considerada uma das 
        mais influentes na história da ciência. Aberta em 1687, esta escola obedece a lei 
        da gravitação universal e as três leis de Newton, que fundamentaram a mecânica 
        clássica. Ao demonstrar a consistência que havia entre o sistema por si idealizado 
        e as leis de Kepler do movimento dos planetas, foi a primeira a ter cursos de 
        movimentos de objetos, tanto na Terra como em outros corpos celestes.
    </p>
    <h4>Nossa missão</h4>
    <p class="text-justify">
        Mostrar que a função da ciência é descobrir leis universais e enunciá-las de forma 
        precisa e racional.
    </p>
    <h4>Instalações</h4>
    <p class="text-justify">
        Está agora com mais ou menos 600 graduandos, 300 graduados, e sobre 160 companheiros. 
        A instituição existe para dar a seus membros uma recompensa, com grandes recursos, e o 
        lugar intelectual inspirando em que para perseguir a educação e a pesquisa.
    </p>
</section>
@endsection
