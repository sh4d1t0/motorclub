@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        <div class="grid-x grid-padding-x grid-padding-y">
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
            <div class="cell small-12 medium-8 large-4">
                <div class="card">
                    @include('flash::message')
                    <div class="card-divider">
                        Datos de usuario
                    </div>
                    <div class="card-section">
                    @include('users.show_fields')
                    <!-- For users -->
                        <a href="{!! route('users.edit', [Auth::user()->id]) !!}" class="button primary">Editar</a>
                        <!-- For admins -->
                    <!--<a href="{!! route('users.index') !!}" class="btn btn-default">Back</a>-->
                    </div>
                </div>
            </div>
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
        </div>
    </div>
@endsection
