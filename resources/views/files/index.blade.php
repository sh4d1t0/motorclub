@extends('layouts.app')

@section('content')
    <div class='view_parent_image1'>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        @include('flash::message')
                        <div class="panel-heading">
                            <h1>El club</h1>
                        </div>
                        <div class="panel-body">
                            <h3>Somos un club que esta afiliado al moto club
                            nacional BMW y legalmente constituidos
                            siendo uno de los clubes más numerosos y
                            de suma importancia a nivel nacional.</h3>
                            <div class="clearfix"></div>
                            <a class="btn btn-primary">
                                Documentos
                            </a>
                            <a class="btn btn-primary">
                                Mesa Directiva
                            </a>
                            @include('flash::message')
                            <div class="clearfix"></div>
                            <div class="box box-primary">
                                <div class="box-body">
                                    @include('files.table')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

