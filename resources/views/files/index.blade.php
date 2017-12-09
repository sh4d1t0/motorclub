@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x grid-padding-y">
            <div class="cell hide-for-small-only medium-2 large-2"><!-- ### --></div>
            <div class="cell small-12 medium-8 large-8">
                <h1 class="text-right text-overline">Documentos</h1>
                <div class="grid-x grid-margin-x grid-padding-y">
                    @include('flash::message')
                    @foreach($files as $files)
                        <div class="cell small-3">
                            <p>{!! $files->title !!}</p>
                            <div class='button-group'>
                                <a href="{{ url('el-club/documentos/'.$files->id.'/ver') }}" class='clear button primary'><i class="fi-eye size-21"></i></a>
                                <a href="{{ url('el-club/documentos/'.$files->id.'/descargar') }}" class='clear button primary'><i class="fi-page-export-pdf size-21"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="cell hide-for-small-only medium-2 large-2"><!-- ### --></div>
        </div>
    </div>
@endsection

