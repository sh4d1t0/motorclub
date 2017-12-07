@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 22px;">
    <div class="row">
        <div class="small-6 small-centered columns">
            <div class="panel panel-default">
                @include('flash::message')
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas dentro!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
