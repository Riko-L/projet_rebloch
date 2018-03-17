<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href={{asset("css/media.css")}}>
    @yield('head_title')
</head>


<body>

<!-------------------------------------------------------------------
NAVIGATION
-------------------------------------------------------------------->
<nav class="navbar-material">
    <div class="nav-wrapper">
        <a href="{{ route('welcome') }}" class="brand-logo">Rebloch' Social</a>

        <a href="#" data-activates="mobile" class="button-collapse">
            <i class="material-icons">menu</i>
        </a>
        @if (Route::has('login'))
            <ul class="right hide-on-med-and-down">
                @auth
                    <li>
                        <a href="{{ route('profilID',Auth::user()->id) }}">{{ Auth::user()->name  }}</a>
                    </li>
                    <li>
                        <a href="{{ route('compte') }}">Compte</a>
                    </li>
                    <li>
                        <a href="{{ route('flux') }}">Flux</a>
                    </li>
                    <li>
                        <a href="{{ route('search') }}">Recherche</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('register') }}">Inscription</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Connection</a>
                    </li>
                @endauth
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>

                @auth
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        @endif
        <ul class="side-nav" id="mobile">
            @auth
                <li>
                    <a href="{{ route('profilID',Auth::user()->id ) }}">Mon Profil</a>
                </li>
                <li>
                    <a href="{{ route('compte') }}">Compte</a>
                </li>
                <li>
                    <a href="{{ route('flux') }}">Flux</a>
                </li>
                <li>
                    <a href="{{ route('search') }}">Recherche</a>
                </li>
            @else
                <li>
                    <a href="{{ route('register') }}">Inscription</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Connection</a>
                </li>
            @endauth
            <li>
                <a href="{{ route('contact') }}">Contact</a>
            </li>

            @auth
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf</form>
                </li>
            @endauth
        </ul>
    </div>
</nav>
<!-------------------------------------------------------------------
HEADER
-------------------------------------------------------------------->
<header class="container">
    <div class="row">
        <div class="col l12 s12 center-align">
            @if (session('status'))
                <div class="card-panel">
                    {{ session('status') }}
                </div>
            @endif
            @yield('page_title')
        </div>
    </div>
</header>

<!-------------------------------------------------------------------
PARTIE PRINCIPALE DE LA PAGE
-------------------------------------------------------------------->
<main class="container">
    <div class="row">
        @yield('content')
    </div>
</main>

<!-------------------------------------------------------------------
FOOTER
-------------------------------------------------------------------->

<footer class="page-footer blue-grey lighten-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5>Robloch' Social</h5>
                <div class="row">
                    <div class="col l6">
                        <address>
                            <h6>Rebloch' Social:</h6>
                            <p>27 Route du Pont, 74000 ANNECY
                                <br> Tel: 04 50 88 00 00
                                <br> Fax: 04 50 98 00 00
                                <br> Siret : 0125 566 897 2</p>
                        </address>
                    </div>
                    <div class="col l6">
                        <h6>Autres Informations: </h6>
                    </div>
                </div>

            </div>
            <div class="col l3 s6">
                <h5>Site map</h5>
                <ul>
                    @auth
                    <li>
                        <a href="{{ route('profilID', Auth::user()->id ) }}">Profil</a>
                    </li>
                    @endauth
                    <li>
                        <a href="{{ route('flux') }}">Flux</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('search')}}">Recherche</a>
                    </li>
                </ul>
            </div>
            <div class="col l3 s6">
                <h5>Légales</h5>
                <ul>
                    <li>
                        <a href="{{ route('legale') }}">Mentions Légales</a>
                    </li>
                    <li>
                        <a href="{{ route('cgv') }}">Conditions Générales</a>
                    </li>
                </ul>
            </div>


        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2018 Rebloch' Social
            <a href="#!">Intranet</a>
        </div>
    </div>
</footer>


<!-------------------------------------------------------------------
Script
 -------------------------------------------------------------------->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
{{--<script src="{{ asset('js/materialize.js') }}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>

</html>