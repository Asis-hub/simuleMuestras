<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'SIMULE')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">SIMULE</a>
        <img class="logo" src="/images/d79a16b61de6b8760e0f8ed6c43ec2c0.png" alt="CEOA" style="max-height: 40px;"></h1>
        <a href="/">
            <span class="left"></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                @if(Route::is('surveyor.show'))
                    <a class="nav-link active" href="{{ route('surveyor.index') }}">
                        &larr; Regresar
                    </a>
                @endif
                @if(Route::is('listaporgenero.show'))
                    <a class="nav-link active" href="{{ route('listaporgenero.index') }}">
                        &larr; Regresar
                    </a>
                @endif
                @if(Route::is('listaporedad.show'))
                    <a class="nav-link active" href="{{ route('listaporedad.index') }}">
                        &larr; Regresar
                    </a>
                @endif

                @if(auth()->check() && auth()->user()->getRole() === 'admin')
                    <a class="nav-link active" href="{{ route('admin.home.index') }}">Administrador</a>
                @endif
                <a class="nav-link active" href="{{ route('home.index') }}">Menú principal</a>
                <a class="nav-link active" href="{{ route('home.about') }}">Acerca de</a>
                <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                @guest
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                @else
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Logout</a>
                        @csrf
                    </form>
                @endguest
                
            </div>
        </div>
    </div>
</nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'Centro de Estudios de Opinión y Análisis')</h2>
        </div>
    </header>
    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                CEOA - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://www.uv.mx/centrodeopinion/">
                    Centro de Estudios de Opinión y Análisis
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
