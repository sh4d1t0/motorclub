@extends('layouts.app')

@section('content')
    <section class="grid-container fluid">
        <h1>Crear usuario</h1>
    </section>
    <div class="grid-container fluid">
        @include('adminlte-templates::common.errors')
        <div class="grid-x grid-margin-x">
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
            <div class="cell small-12 medium-8 large-4">
                <div class="card">
                    <div class="card-divider">
                        <h1>Crear usuario</h1>
                    </div>
                    <div class="card-section">
                        {!! Form::open(['route' => 'users.store', 'class' => 'grid-container']) !!}
                            @include('users.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
        </div>
    </div>
@endsection
