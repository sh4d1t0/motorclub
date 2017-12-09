@extends('home.index')
@section('content')
    <div class="cell small-12">
        <h1>MOTORRAD<br>CIUDAD DE MÉXICO A.C.</h1>
    </div>
    <div class="cell small-12">
        @if (Route::has('login'))
            @auth
                <a class="button primary" href="{{ url('/home') }}">Home</a>
            @else
                <a class="button primary" href="{{ route('login') }}" role="button">Entrar</a>
                <a class="button primary" href="{{ route('register') }}" role="button">Registrar</a>
            @endauth
        @endif
    </div>
@endsection