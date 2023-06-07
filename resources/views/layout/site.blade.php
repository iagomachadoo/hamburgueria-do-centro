<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hamburgueria do Centro</title>

    <!-- Carregando assets -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Start header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('assets/imgs/header/logo-header.webp')}}" alt="Logo Hamburgueria do Centro">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto header__nav">
                        <li class="nav-item">
                            <a class="nav-link header__link text-capitalize pe-5" href="#">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header__link text-capitalize pe-5" href="#">sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header__link text-capitalize pe-5" href="#">cardápio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header__link text-capitalize">contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    @yield('content')
</body>

</html>
