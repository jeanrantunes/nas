<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/material.min.css">
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


</head>
<body class="nas">
    <div class="mdl-layout__container">
    <div id="app" class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="mdl-layout__header is-casting-shadow">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">{{ config('app.name', 'NAS') }}</span>
            </div>
        </header>
        <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="nas-header center-block">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <img src="https://cdn0.iconfinder.com/data/icons/PRACTIKA/64/user.png" class="demo-avatar">
                    <div>  
                        <span>Olá, {{ Auth::user()->name }}</span>
                        <button id="menu1" class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="material-icons">arrow_drop_down</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" for="menu1">
                                <li class="mdl-menu__item">Opções usuário</li>
                                <li class="mdl-menu__item">Opções usuário</li>
                                <li class="mdl-menu__item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sair

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                        </ul>
                    </div>
                @endif
            </header>
            <nav class="mdl-navigation">
                <a href="" class="mdl-navigation__link">
                    <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Teste
                </a> 
                <a href="" class="mdl-navigation__link">
                    <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Teste
                </a>
                <a href="" class="mdl-navigation__link">
                    <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Teste
                </a>
                <a href="" class="mdl-navigation__link">
                    <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Teste
                </a>
                <a href="" class="mdl-navigation__link">
                    <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Teste
                </a>    
            </nav>
        </div>
        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-grid">
                @yield('content')
            </div>
        </main>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                </div>
            </div>
        </nav>
    </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
</body>
</html>
