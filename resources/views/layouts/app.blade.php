<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Cuisine/@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        

        <!-- Styles -->

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/7a016b18d6.js"></script>
               
          <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
       
          <!-- Custom styles for this template -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>  
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
        <body class="font-sans ">

            <header class="">
                <!-- <div class="top"></div> -->
                <div class="logo top">
                    <div></div>
                </div>
                <div class="titre top">
                    <h1><a href="{{ url('/') }}">E + L = recettes de K li T </a></h1>
                </div>
                <div class="connexion top">
                @if (Route::has('login'))
                    <div class="   px-6 py-4 sm:block">
                        @auth
                        @if(Auth::user()->role == "admin") 
                            <a href="{{ url('/admin') }}" class="text-sm text-white-700 ">Admin</a></br>
                        @endif
                            <a href="{{ url('/pageUtilisateur/acceuil') }}" class="text-sm text-white-700 ">Mon tableau de bord</a>
                         
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Se deconnecter') }}
                                </x-dropdown-link>
                            </form>      
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-white-700 ">Se connecter</a>
                                </br>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm text-white-700 ">Créer un compte</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>
                </div>
                </header>
                 <section class="page container-fluid" id="app">
                  @yield('content')
                </section>
            

       <footer class="footer-site">&copy; CCLS-2020</footer>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body>
</html>
