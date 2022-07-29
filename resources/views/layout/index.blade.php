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
    <link href="{{ asset('css/layout/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colaboradores.css') }}" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <main>
        <aside>
            <div class="top-info">
                <div class="logo">
                    <img src="https://medicatel.red/img/svg/logo-medicatel.svg" alt="Logo Principal Medicatel">
                </div>
                <div class="user-logged-in">
                    <div class="img-user">
                        <img src="img/grupo-terra.png" alt="grupo terra logo">
                    </div>
                    <div class="name-user">
                        <p>{{$response->nombre}}</p>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </div>
                <div class="options">
                    <a href="{{route('dashboard')}}">
                        <div class="items" id="item-1">
                            <div class="active"></div>
                            <div>
                                <i class="bi bi-building icons"></i>
                                <p>Empresa</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('colaboradores')}}">
                        <div class="items" id="item-2">
                            <div class="inactive"></div>
                            <div>
                                <i class="bi bi-people icons"></i>
                                <p>Colaboradores</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="bottom-info">
                <a class="logout" href="{{route('login')}}">
                    <i class="bi bi-door-closed icons"></i>
                    <p>Cerrar Sesión</p>
                </a>
            </div>
        </aside>
        <section>
            <div class="top-section">
                <button type="submit"><i class="bi bi-plus-circle-dotted"></i> AGENDAR</button>
                <div class="user-logged-in-section">
                    <div class="img-user">
                        <img src="img/grupo-terra.png" alt="grupo terra logo">
                    </div>
                    <div class="name-user">
                        <p>{{$response->nombre}}</p>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </div>
            </div>
            <div class="main-section">
                @yield('content')
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
