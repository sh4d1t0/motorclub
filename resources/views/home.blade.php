@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        <div class="grid-x grid-padding-x grid-padding-y">
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
            <div class="cell small-12 medium-8 large-4">
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
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
        </div>
    </div>
@endsection
