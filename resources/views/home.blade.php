@extends('layouts.app')

@section('content')
<div class="grid-container fluid">
    <div class="grid-x grid-margin-x">
        <div class="small-6 small-offset-3 small-centered columns">
            <div class="card">
                @include('flash::message')
                <div class="card-divider">
                    Dashboard
                </div>
                <div class="card-section">
                    @if (session('status'))
                        <div class="callout success">
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
