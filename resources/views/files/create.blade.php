@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        @include('adminlte-templates::common.errors')
        <div class="grid-x grid-margin-x grid-padding-y">
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
            <div class="cell small-12 medium-8 large-4">
                <div class="card">
                    <div class="card-divider">
                        <h1>Subir documento</h1>
                    </div>
                    <div class="card-section">
                        {!! Form::open(['url' => 'el-club/documentos', 'class' => 'grid-container', 'files' => true]) !!}
                            @include('files.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
        </div>
    </div>
@endsection
