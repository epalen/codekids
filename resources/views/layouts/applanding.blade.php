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
        <!-- All CSS files included -->
        <link rel="stylesheet" href="{{ asset('css/elements.css') }}">
        <link rel="stylesheet" href="{{ asset('css/landingstyle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/color/red.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!-- Modernizr Js -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        

        <!-- Scripts -->
        <script src="{{ asset('js/landingapp.js') }}"></script>
        <!-- All JavaScript files included -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
