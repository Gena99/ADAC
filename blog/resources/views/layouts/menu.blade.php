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