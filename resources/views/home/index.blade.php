<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
</head>

<body>

<div id="app">
    <div class="grid-y fluid grid-frame">
        <div class="cell small-2">
            <div class="grid-x grid-padding-x grid-padding-y align-middle">
                <div class="cell small-6 medium-2">
                    <img src="{{ URL::asset('/images/logo.png') }}">
                </div>
            </div>
        </div>
        <div class="cell small-8 medium-9">
            <div class="grid-y grid-frame">
                <div class="cell small-2 medium-4">
                    <!-- #### -->
                </div>
                <div class="cell small-8 medium-4">
                    <div class="grid-x grid-padding-x align-middle">
                        <div class="cell small-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <div class="cell small-2 medium-4">
                    <!-- #### -->
                </div>
            </div>
        </div>
        <div class="cell small-2 medium-1" style="background-color: rgba(0, 0, 0, 0.65)">
            <div class="grid-x grid-padding-x align-middle">
                <div class="cell small-12 medium-6">
                    <p>WWW.BMWMOTOCLUBESMEXICOAC.ORG.MX</p>
                </div>
                <div class="cell hide-for-small-only medium-6">
                    <div class="grid-x grid-padding-x align-middle">
                        <div class="cell small-2">
                            <img src="{{ URL::asset('/images/solasol.png') }}">
                        </div>
                        <div class="cell small-8">
                            <p class="text-right">BMW MOTORRAD CLUB CIUDAD DE MÉXICO IS AFFILIATED TO
                                BMW MOTO CLUBES MÉXICO AND BMW CLUBS INTERNATIONAL COUNCIL</p>
                        </div>
                        <div class="cell small-2">
                            <img src="{{ URL::asset('/images/logoclubes.png') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
