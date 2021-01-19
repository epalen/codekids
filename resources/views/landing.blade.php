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
        <!-- theme preloader area start -->
        <div id="humanity-preloader-wrapper">
            <div class="preloader-wave-effect"></div>
        </div>
        <!-- theme preloader area end -->
        <!-- Main wrapper start -->
        <div class="wrapper">
            <!-- Header area start -->
            @include('includes.header')
            <!-- Header area end -->
            <!-- Full width search section start -->
            @include('includes.resources.searchwrapper')
            <!-- Full width search section end -->
            <!-- Slider area start -->
            @include('includes.resources.slider')
            <!-- Slider area end -->
            <!-- Page content area start -->
            @include('includes.section')
            <!-- Page content area end -->
            <!-- Footer section start -->
            @include('includes.footer')
            <!-- Footer section end -->
        </div>
    </body>
</html>

<!--<script type="text/javascript">
    $.ajax(
    {
        url: "/",
        type: 'GET',
    }).done( 
        function(data) 
        {
            $('.container').html(data.html);
        }
    );
</script>-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137353614-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137353614-1');
</script>
