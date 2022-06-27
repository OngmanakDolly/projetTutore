<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BetterliDays</title>
        
        <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">BetterliDays</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Accueil</a></li>
                     @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Se connecter</a></li>
                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">S'Inscrire</a></li>
                        @endif
                    @endauth
                    </ul>
                </div>
                @endif
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Rejoignez  des milliers d'entreprises et de professionnels</h1>
                        <hr class="divider" />
                    </div>
                    
                </div>
            </div>
        </header>
        <!-- About-->
       
        
        

      
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Company Name</div></div>
        </footer>
      
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts2.js') }}"></script>
      
    </body>
</html>
