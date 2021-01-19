<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
  <title>
    @isset($title)
        {{ $title }} | 
    @endisset
        {{ config('app.name') }}
  </title>

  <!-- Icons -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- Styles required by this views -->
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">  
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  @include('core.navbar')
  
  <div class="app-body">
    @include('core.sidebar')
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/inicio') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/campanas') }}">Administración de publicaciones</a></li>
        <li class="breadcrumb-item active">Detalle publicación</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li>
      </ol>
      
      @include('admin.posts.includes.profile')

      @yield('content')
      <!-- /.container-fluid -->
    </main>

    @include('core.asidemenu')

  </div>

  @include('core.footer')

  @include('core.scripts')
  @yield('myscript')

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137353614-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-137353614-1');
  </script>

</body>
</html>