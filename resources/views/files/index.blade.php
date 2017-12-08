@extends('layouts.app')

@section('content')
    <div class='view_parent_image1'>
        <div class="grid-container fluid">
            <div class="grid-x grid-margin-x">
                <div class="cell small-6 small-offset-3">
                    <div class="card">
                        @include('flash::message')
                        <div class="card-divider">
                            <h1>El club</h1>
                        </div>
                        <div class="card-section">
                            <p>Somos un club que esta afiliado al moto club
                            nacional BMW y legalmente constituidos
                            siendo uno de los clubes más numerosos y
                            de suma importancia a nivel nacional.</p>
                            <div class="clear"></div>
                            <a class="button primary">
                                Documentos
                            </a>
                            <a class="button primary">
                                Mesa Directiva
                            </a>
                            @include('flash::message')
                            <div class="clear"></div>
                            @include('files.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

