@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        <div class="grid-x grid-padding-x">
            <div class="cell small-6 small-offset-3">
                <div class="card">
                    @include('flash::message')
                    <div class="card-divider">
                        Datos de usuario
                    </div>
                    <div class="card-section">
                        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}
                        @include('users.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection