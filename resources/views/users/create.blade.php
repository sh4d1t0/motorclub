@extends('layouts.app')

@section('content')
    <section class="grid-container fluid">
        <h1>Crear usuario</h1>
    </section>
    <div class="grid-container fluid">
        @include('adminlte-templates::common.errors')
        <div class="grid-x grid-margin-x">
            <div class="cell small-6 small-offset-3">
                <div class="card">
                    <div class="card-section">
                        {!! Form::open(['route' => 'users.store', 'class' => 'grid-container']) !!}
                            @include('users.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
