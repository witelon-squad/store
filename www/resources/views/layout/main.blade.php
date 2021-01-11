<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('header')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title></title>
</head>
<body>
@yield('menu')
<header>
    <nav class="navbar fixed-top navbar-expand navbar-light bg-white d-block pb-0">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}"
                                                                     style="width: 160px;"></a>
            <div class="order-lg-2 justify-content-end" id="navbarSupportedContent">
                <ul class=" navbar-nav first-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="{{ route('cart') }}"><i
                                class="fas fa-shopping-basket d-block"></i>Koszyk</a>
                    </li>
                    <li class="nav-item dropdown ">
                        @guest
                            <a class="nav-link text-center" href="{{ route('login') }}"><i
                                    class="fas fa-user d-block"></i>Zaloguj się</a>
                        @else
                            <div class="dropdown">
                                <a class="nav-link text-center dropdown-toggle" href="#" role="button"
                                   id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user d-block"></i>Konto
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('home') }}">Dane konta</a></li>
                                    @hasanyrole('admin')
                                    <li><a class="dropdown-item" href="{{route('products.index') }}">Admin panel</a></li>
                                    @endhasallroles
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Wyloguj się</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endguest
                    </li>
                </ul>

            </div>
            <form class="order-lg-1 d-flex nav_search">
                <input class="form-control nav_input_search" type="search" placeholder="Szukaj" aria-label="Search">
                <button class="btn btn-main btn-nav" type="submit">Szukaj</button>
            </form>
        </div>

        <div class="category_menu container-fluid text-white py-1">
            <div class="mx-auto" id="colaps">
                <ul class=" navbar-nav me-auto mb-2 mb-lg-0 flex-wrap">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products') }}">Sklep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products.index') }}">O nas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

@yield('footer')
<footer class="bg-light text-center text-lg-start ">
    <div class="container py-5">
        <div class="d-flex justify-content-center">
            <div class="footer_item">
                <a href="{{ route('payment') }}" class="footer_link">Formy płatności</a>
            </div>
            <div class="footer_item">
                <a href="{{ route('InfoShipping') }}" class="footer_link">Koszty dostawy</a>
            </div>
            <div class="footer_item">
                <a href="{{ route('index') }}" class="footer_link">Zwroty i reklamacje</a>
            </div>
            <div class="footer_item">
                <a href="{{ route('policy') }}" class="footer_link">Polityka prywatności</a>
            </div>
        </div>
    </div>
</footer>
@yield('script')
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/mainCarusel.js"></script>
<script src="js/openForm.js"></script>
<script src="js/sliderSlick.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>
