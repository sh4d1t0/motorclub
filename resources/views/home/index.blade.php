<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>BMW Site - Home</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
</head>

<body>

<div class="grid-y" style="height: 100%;">
    <div class="cell small-2">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell small-6">
                <div class="grid-x grid-padding-y align-middle">
                    <div class="cell small-3">
                        <img src="{{ URL::asset('/images/logo.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cell small-9">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell small-4">@yield('content')</div>
        </div>
    </div>
    <div class="cell small-1" style="background-color: rgba(0, 0, 0, 0.65)">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell small-6">WWW.BMWMOTOCLUBESMEXICOAC.ORG.MX</div>
            <div class="cell small-6">
                <div class="grid-x grid-padding-x align-middle">
                    <div class="cell small-2">
                        <img src="{{ URL::asset('/images/solasol.png') }}">
                    </div>
                    <div class="cell small-8">
                        BMW MOTORRAD CLUB CIUDAD DE MÉXICO IS AFFILIATED TO
                        BMW MOTO CLUBES MÉXICO AND BMW CLUBS INTERNATIONAL COUNCIL
                    </div>
                    <div class="cell small-2">
                        <img src="{{ URL::asset('/images/logoclubes.png') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
