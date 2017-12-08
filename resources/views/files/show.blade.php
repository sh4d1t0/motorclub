@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        <div class="grid-x grid-padding-x">
            <div class="cell small-6 small-offset-3">
                <div class="card">
                    <div class="card-divider">
                        <h1>Detalle documento</h1>
                    </div>
                    <div class="card-section">
                        @include('files.show_fields')
                        <a href="{!! url('el-club/documentos') !!}" class="button primary">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
