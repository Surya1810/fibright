<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fibright | @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800.900'
        rel='stylesheet'>

    <style>
        body {
            font-family: 'Montserrat';
        }

        .btn-info {
            background-color: #83B2AC;
            border-color: #83B2AC;
        }

        .btn-info:hover {
            background-color: #678c87;
        }

        .nav-link {
            font-weight: bold;
            color: black;
        }

        .nav-item .active {
            color: #86654B !important;
        }
    </style>
    @stack('css')
</head>

<body style="background-color: #F3FCFD">
    <nav class="navbar navbar-expand-lg rounded fixed-top" aria-label="Navbar" style="background-color: #F3FCFD">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
                aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <a class="navbar-brand col-lg-3 me-0" href="{{ route('home') }}">
                    <img src="{{ asset('assets/logo/logo.png') }}" alt="Fibright" height="50">
                </a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}"
                            href="{{ route('news') }}">News & Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('product') ? 'active' : '' }}"
                            href="{{ route('product') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}"
                            href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">

            @yield('content')

        </div>
    </main>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 Fibright, Inc</p>

            <a href="{{ route('home') }}"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="{{ asset('assets/logo/logo.png') }}" alt="Fibright" height="50">
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-body-secondary">Home</a>
                </li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-body-secondary">About
                        Us</a></li>
                <li class="nav-item"><a href="{{ route('news') }}" class="nav-link px-2 text-body-secondary">News &
                        Event</a></li>
                <li class="nav-item"><a href="{{ route('product') }}"
                        class="nav-link px-2 text-body-secondary">Shop</a></li>
            </ul>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @stack('scripts')
</body>

</html>
