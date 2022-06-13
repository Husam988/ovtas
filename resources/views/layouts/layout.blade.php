<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>❤ Optimum Vision | Welcome</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('scss/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('scss/index.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" sizes="32x32" type="image/x-icon">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/22d80b14b2.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Header -->
    <header class="header bg-color">
        @include('layouts.inc.header')
    </header>

    <main class="home-main" id="main">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>


</body>

</html>
