<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Administrativo</title>

    <!-- Carregando assets -->
    @vite(['resources/sass/app.scss', 'resources/css/painel.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Start header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/imgs/header/logo-header.webp') }} " alt="Logo Hamburgueria do Centro">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 header__nav">
                        <li class="nav-item">
                            <a class="nav-link active text-capitalize" aria-current="page" href="{{ route('painel.banner.index') }}">banner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">cardápio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">depoimentos</a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    @yield('content')
</body>

</html>
