<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="fond">
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#"><img src= "/images/LogoADACLiveFinalBD3.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active nav-btn"><a href="/">Accueil <span class="sr-only">(current)</span></a></li>
                        <li class="nav-btn"><a href="/partitions">Partitions</a></li>
                        <li class="nav-btn"><a href="/activites">Activités</a></li>
                        <li class="nav-btn"><a href="/association">L'association</a></li>
                        <li class="nav-btn"><a href="/ecoles">Les écoles</a></li>
                        <li class="nav-btn"><a href="/groupes">Les groupes</a></li>
                        <li class="nav-btn"><a href="/galerie">Galerie</a></li>
                        <li class="nav-btn"><a href="/contact">Contact</a></li>
                        <li class="nav-btn"><a href="/presse">Presse</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())

                        <li><a href="{{ route('login') }}">Connexion</a></li>
                        <li><a href="{{ route('register') }}">Inscription</a></li>


                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    <br><br><br>
    @yield('content')
    <br><br><br>
</div>
<!-- <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Company<span>logo</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Pricing</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Company Name &copy; 2015</p>
        </div>

        <div class="footer-center">
            <div >

                <div class="row-fluid">
                    <div class="span9" id="slider">
                        <div class="row-fluid">
                            <div class="span2" id="carousel-bounding-box">
                                <div id="myCarousel" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0"><img class="img-rounded" src="http://lorempixel.com/120/100"></div>
                                        <div class="item" data-slide-number="1"><img class="img-rounded" src="http://lorempixel.com/120/100/technics/1"></div>
                                        <div class="item" data-slide-number="2"><img class="img-rounded" src="http://lorempixel.com/120/100/business/1"></div>
                                        <div class="item" data-slide-number="3"><img class="img-rounded" src="http://lorempixel.com/120/100/city"></div>
                                        <div class="item" data-slide-number="4"><img class="img-rounded" src="http://lorempixel.com/120/100/city/1"></div>
                                        <div class="item" data-slide-number="5"><img class="img-rounded" src="http://lorempixel.com/120/100"></div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>

        <div class="footer-right">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>21 Revolution Street</span> Paris, France</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1 555 123456</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer> -->
    <footer class="navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-4">2017 © Tous droits réservés.</div>
                <div class="col-md-4 col-xs-4"> 
                    <a href="https://www.les-vergers-retrouves-du-comminges.org/contact/">Contact</a>|
                    <a href="https://www.les-vergers-retrouves-du-comminges.org/mentions-legales/">Mentions légales</a>|
                    <a href="https://www.les-vergers-retrouves-du-comminges.org/plan-du-site/ ">Plan du site</a>
                </div>
                <div class="col-md-4 col-xs-4">Les Vergers retrouvés du COMMINGES.</div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
