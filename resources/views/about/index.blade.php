@extends('layouts.applanding')

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @isset($title)
                {{ $title }} | 
            @endisset
                {{ config('app.name') }}
        </title>

    </head>
    <body>
        <!-- Main wrapper start -->
        <div class="wrapper">
            <!-- Header area start -->
            @include('includes.header')
            <!-- Header area end -->
            <!-- Full width search section start -->
            @include('includes.resources.searchwrapper')
            <!-- Full width search section end -->
            <!-- template breadcrumb start -->
            @include('about.includes.themesection')
            <!-- template breadcrumb end -->
            <!-- Page content area start -->
            @include('about.includes.featuresection')
            <!-- Page content area end -->
            <!-- Footer section start -->
            @include('includes.footer')
            <!-- Footer section end -->

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137353614-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-137353614-1');
            </script>
        </div>
    </body>
</html>