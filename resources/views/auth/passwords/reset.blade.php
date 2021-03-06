<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

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
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Restablecer</h1>
                            <p class="text-muted">Restablecer contraseña</p>
                            <form method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}
                                <div class="input-group mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus placeholder="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-group mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-group mb-3{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
        
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">
                                            Restablecer contraseña  
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Code Kids</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <!--<a href="{{ route('register') }}" class="btn btn-primary active mt-3">
                                    ¡Regístrate ahora!
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

</body>
</html>