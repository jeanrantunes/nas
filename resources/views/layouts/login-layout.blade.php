<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="screen-login">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
   
    
    <!-- <link rel="stylesheet" href="css/mdb.min.css"> -->
    
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


</head>
<body class="nas layout-welcome valign-wrapper">
    
    <main class="container" id="app">

         @yield('content')
    </main>
        
    

    <script src="js/jquery-3.2.1.min.js"></script>
    
    <script src="js/materialize.js"></script>
    
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('js/login.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
</body>
</html>
