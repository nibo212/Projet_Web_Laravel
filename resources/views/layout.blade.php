<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel='icon' href="{{asset('favicon.ico')}}">
    @yield('title')
    <link rel="stylesheet" href="{{asset('/assets/vendors/bootstrap/bootstrap-4.5.3-dist/css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <link rel="stylesheet" href="{{asset('/assets/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/styles.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
</head>


<body>


<header class="container-fluid">
    
            <nav class="navbar navbar-expand-lg topnav">
                <div class="container-fluid">
                <ul class="container-fluid nav navbar-nav">
                    <li><img src="{{asset('/assets/images/TTS.png')}}" class="imghead" alt=logo>
                    <p>Trouve ton stage<br>@ Cesi</p></li>
                    <div id="navbarSupportedContent1" class="navbar-collapse collapse show">
                    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Menu Burger">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        
                    <ul class="navbar-nav container" style="margin: 0% 5%;">
                        <li class="nav-item"> 
                            <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-center" data-toggle="dropdown" href="#">Offres d'emploi</a>
                            <div class="dropdown-menu">
                                <a href="{{route('Offre.index')}}" class="dropdown-item text-dark">Stage</a>
                                <a href="/offres/apprentissage" class="dropdown-item text-dark">Apprentissage</a>
                            </div>
                        </li>
                        <!--li class=""><a class="nav-item nav-link" href="/stages">Offres d'emploi</a></li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('Entreprise.index')}}">Entreprises</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        
                    
                        </ul>
                        
                        <div id="app">
                        
                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif


                        @else
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="/userspace">Espace utilisateur</a>
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </div>
                        
                        </div>
                    </div>
                    </ul>
                    </div>

            </nav>

            <div class="clear"></div>
    </header>


        @yield('content')

        

    <footer class="container-fluid">
        <div class="row">

        <div class="col-md-1 col-sm-3 col-6">
            <br>
            <img class="logocesi" src="{{asset('/assets/images/logoCESI.png')}}"/>
            <br><br><br>
            </div>

        <div class="col-md-2 col-sm-3 col-6">
            <p class="center">
                <br>© Copyright 2021<br>
                Ball Andreas <br> Broutin Méline<br> Bogenschutz Nicolas<br> Jenn Maxime</p></div>

        <div class="col-md-3 col-sm-6 col-6">
            <br>
        <div class="footer_plan">
            <h4 class="TitreFooter">Plan du site</h4>
            <li class="pucefoot"><a href="/">Accueil</a></li>
            <li class="pucefoot"><a href="/offres/stages">Stages</a></li>
            <li class="pucefoot"><a href="/offres/apprentissage">Apprentissages</a></li>
            <li class="pucefoot"><a href="/Entreprise">Entreprises</a></li>
            <li class="pucefoot"><a href="/espace">Espaces Utilisateur</a></li>
            <br>
        </div>
        </div>

        <div class="col-md-3 col-sm-6 col-6">
            <br>
        <div class="footer_lienUtiles">
            <h4 class="TitreFooter">Liens utiles</h4>
            <li class="pucefoot"><a href="https://cesi.fr">cesi.fr</a></li>
            <li class="pucefoot"><a href="https://ent.cesi.fr">ENT</a></li>
            <li class="pucefoot"><a href="https://moodle-ingenieurs.cesi.fr">Moodle Ingénieurs</a></li>
            <li class="pucefoot"><a href="https://moodle-examens.cesi.fr">Moodle Examens</a></li>
            <li class="pucefoot"><a href="https://1jeune1solution.gouv.fr">1 Jeune 1 solution</a></li>
        </div>
            
        </div>
            
        <div class="col-md-3 col-sm-6 col-12">
            <div>
                <br>
            <h4 class="TitreFooter">Nos réseaux</h4><br>
            <a class="iconbot" href="https://www.facebook.com/cesistrasbourg"><i class="fb fab fa-facebook fa-3x"></i></a>

            <a class="iconbot" href="https://twitter.com/CesiStrasbourg"><i class="twttr fab fa-twitter fa-3x"></i></a>

            <a class="iconbot" href="https://www.instagram.com/campus_cesi/?hl=fr"><i class="ig fab fa-instagram fa-3x"></i></a>

            <a class="iconbot" href="https://www.youtube.com/user/groupecesi1"><i class="yt fab fa-youtube fa-3x"></i></a><br><br>
            </div>
        </div>
        </div>
    </footer>

   <script src="{{asset('/assets/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
   <script src="{{asset('/assets/vendors/bootstrap/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js')}}"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>
