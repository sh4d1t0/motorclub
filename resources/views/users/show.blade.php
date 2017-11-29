@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @include('flash::message')
                    <div class="panel-heading">Datos de usuario</div>

                    <div class="panel-body">
                    @include('users.show_fields')
                    <!-- For users -->
                        <a href="{!! route('users.edit', [Auth::user()->id]) !!}" class="btn btn-default">Editar</a>
                        <!-- For admins -->
                    <!--<a href="{!! route('users.index') !!}" class="btn btn-default">Back</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
