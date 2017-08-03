<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <link rel="stylesheet" type="text/css" href="blog/resources/assets/sass/app.scss"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ADAC-LIVE</title>

    <!-- Styles -->

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css
    " rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="fond">
<div id="app">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#"><img src="/images/LogoADACLiveFinalBD3.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active nav-btn"><a href="/">Accueil <span class="sr-only">(current)</span></a></li>
                    <li class="nav-btn"><a href="/partitions">Partitions</a></li>
                    <li class="nav-btn"><a href="/activites">Activités</a></li>
                    <li class="nav-btn"><a href="/association">L'association</a></li>
                    <!--<li class="nav-btn"><a href="/ecoles">Les écoles</a></li>-->
                    <li class="nav-btn"><a href="/groupes">Les groupes</a></li>
                    <li class="nav-btn"><a href="/galerie">Galerie</a></li>


                    <li class="nav-btn">
                        <a href="ecoles" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Les écoles <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-btn"><a href="clarac">Clarac</a></li>
                            <li class="nav-btn"><a href="castelnau-magnoac">Castelnau-Magnoac</a></li>
                            <li class="nav-btn"><a href="encausse-les-thermes">Encausse-Les-Thermes</a></li>
                            <li class="nav-btn"><a href="boulogne-sur-gesse">Boulogne-Sur-Gesse</a></li>
                            <li class="nav-btn"><a href="montrejeau">Montréjeau</a></li>
                        </ul>
                    </li>
                    <li class="nav-btn"><a href="/contact">Contact</a></li>
                    <li class="nav-btn"><a href="/presse">Presse</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())

                        <li class="nav-btn"><a href="{{ route('login') }}">Connexion</a></li>
                        <li class="nav-btn"><a href="{{ route('register') }}">Inscription</a></li>


                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="bandeSeparationMenu"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">@yield('content')</div>
            <div class="col-md-3">
                @include('layouts.rightSideBar')

            </div>
        </div>

    </div>
</div>
@include('layouts.footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
