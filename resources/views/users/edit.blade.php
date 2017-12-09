@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        <div class="grid-x grid-padding-x grid-padding-y">
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
            <div class="cell small-12 medium-8 large-4">
                <div class="card">
                    @include('flash::message')
                    <div class="card-divider">
                        Editar datos de usuario
                    </div>
                    <div class="card-section">
                        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}
                        @include('users.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
        </div>
    </div>
@endsection