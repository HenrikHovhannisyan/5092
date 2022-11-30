<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Styles --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>

</head>
<body>
<div id="app">
    <nav
        class="navbar navbar-expand-md navbar-light _nabar {{ isActiveRoute('register', 'd-none') }} {{ isActiveRoute('login', 'd-none') }}">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo.png') }}" class="img-fluid nav_logo" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link nav_link {{ isActiveRoute('home', 'nav_link_active') }}" aria-current="page"
                           href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Coffee
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Coffee1</a></li>
                            <li><a class="dropdown-item" href="#">Coffee2</a></li>
                            <li><a class="dropdown-item" href="#">Coffee3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" aria-current="page" href="#">Wholesale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" aria-current="page" href="#">Learn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">
                    <li class="nav-item d-flex align-items-center me-2">
                        <form action="">
                            <div class="input-group inputSearch">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                       aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                      <button class="btn p-0">
                                          <i class="fa fa-search"></i>
                                      </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link nav_link me-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link nav_link me-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle avatar_dropdown-toggle" href="#"
                               role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ asset('img/no-avatar.png') }}" alt="" width="40" height="40">
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <li class="nav-item d-flex align-items-center me-3">
                            <button type="button" class="btn position-relative">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                0
                            </span>
                            </button>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="">
        @yield('content')
    </main>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
