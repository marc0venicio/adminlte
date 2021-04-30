<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>{{ config('marcos', 'Marcos') }}</title>
    <meta name="title" content="Map-OS">
    <meta name="description" content="Sistema de Controle">
    <meta name="keywords" content="Laravel, dashboard">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- core css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

</head>

<body class="bg-soft">

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>
