<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <section class="main-image">
        <div>
            <img src="https://empresa.medicatel.red/static/media/doctores.8db3d9243f5499eb8b43b7b5e266bb17.svg" alt="Imagen principal Medicatel">
        </div>
    </section>
    <section class="login-form">
        <div class="main-text">
            <p class="text-1">INICIA SESIÓN</p>
            <p class="text-2">EN TU CUENTA</p>
        </div>
        <div class="form">
            <form action="{{route('iniciar_sesion')}}" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    <label for="email">Correo Electrónico</label>
                    <div class="invalid-feedback">
                        Ingresar correctamente el correo electrónico
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="contraseña">
                    <label for="email">Contraseña</label>
                    <div class="invalid-feedback">
                        Ingresar correctamente la contraseña
                    </div>
                </div>

                <a class="link-contrasenia" href=""><span>¿Olvidaste tu contraseña?</span></a>
                <button class="btn btn-ingresar">INGRESAR</button>
                <a class="link-registrate" href=""><span>¿No tienes cuenta? <u>Registrate</u></span></a>
            </form>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
