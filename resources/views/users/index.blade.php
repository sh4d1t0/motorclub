@extends('layouts.app')

@section('content')
    <section class="grid-container">
        <div class="grid-x grid-padding-x align-center-middle">
            <div class="cell small-4">
                <h1 class="text-left">Usuarios</h1>
            </div>
            <div class="cell small-4"><!-- ### --></div>
            <div class="cell small-4">
                <h1 class="text-right">
                    <a class="button primary" href="{!! route('users.create') !!}">Agregar nuevo</a>
                </h1>
            </div>
        </div>
    </section>
    <div class="grid-container">
        <div class="clear"></div>
        @include('flash::message')
        <div class="clear"></div>
        @include('users.table')
        <div class="text-center"></div>
    </div>
@endsection