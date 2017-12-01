@extends('home.index')
@section('content')
    <h1 class="cover-heading">MOTORRAD<br>CIUDAD DE MÉXICO A.C.</h1>
    @if (Route::has('login'))
        @auth
            <a class="btn btn-secondary" href="{{ url('/home') }}">Home</a>
        @else
            <a class="btn btn-secondary" href="{{ route('login') }}" role="button">Entrar</a>
            <a class="btn btn-secondary" href="{{ route('register') }}" role="button">Registrar</a>
        @endauth
    @endif
@endsection