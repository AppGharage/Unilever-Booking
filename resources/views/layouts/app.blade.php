<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/materialicons.css') }}" rel="stylesheet">
    <script src="{{ asset('js/ionicons.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'K-Life') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('stylesheet')

</head>
<body>
    <div id="app">
        @include('inc.navbar')
        @guest   
        
        @else
            @include('inc.sidebar')
        @endguest
        <main >
            @yield('content')
        </main>
    </div>
</body>
</html>
