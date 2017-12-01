<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>BMW Site - Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="container-fluid">

            <header class="masthead clearfix">
                <div class="inner">
                    <div class="masthead-brand"><img src="{{URL::asset('/images/logo.png')}}" /></div>
                </div>
            </header>

            <main role="main" class="inner cover">

                @yield('content')

            </main>

            <footer class="mastfoot">
                <div class="inner row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 my-auto">
                        WWW.BMWMOTOCLUBESMEXICOAC.ORG.MX
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <img class="img-fluid" src="{{URL::asset('/images/solasol.png')}}" />
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-right my-auto">
                                <span class="text-uppercase">BMW MOTORRAD CLUB CIUDAD DE MÉXICO IS AFFILIATED TO
                                    BMW MOTO CLUBES MÉXICO AND BMW CLUBS INTERNATIONAL COUNCIL</span>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <img class="img-fluid" src="{{URL::asset('/images/logoclubes.png')}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
