<!DOCTYPE html>
<html lang="{{ str_replace( '_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Csrf-token" content="{{ csrf_token() }}">
    <title>@yield ('tittle') - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('essentials/images/logo.svg') }}" type="image/x-icon">

    {{--bootstarp css cdn--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{--fontawesome cdn--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{--google fonts cdn--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    {{--google fonts cdn 2--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    {{--bootstrap icon cdn--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{--universal css link--}}
    <link rel="stylesheet" href="{{ asset('essentials/css/unv.css') }}">
    {{--universal css link--}}

    {{--page css link--}}
    @yield('page-css')
    {{--page css link--}}

    @yield('pages-css')
</head>

<body>

    {{--navbar--}}
    <header class="fixed-top shadow bg-light">
        <section class="__latest-notifications">
            <div class="alert py-2 alert-dismissible fade show mb-0 rounded-0 bg-warning" role="alert">
                <p class="text-center font-500 text-black">50% off on top brands <a href="javascript:void(0)" class="text-success">Buy now!</a></p>
                <button type="button" class="btn-close pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </section>
        <nav class="navbar navbar-expand-lg px-5 py-3">
            <div class="container-fluid">
                <a class="navbar-brand fs-3 font-500 text-black" href="{{ url('/') }}"><i class="fa-solid fa-cart-flatbed-suitcase me-2"></i>NeoCart</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="javascript:void(0)navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="ps-5 w-50">
                        <form class="d-flex border px-2 py-1 rounded-3 w-100" role="search">
                            <input class="form-control me-2 border-0 shadow-none bg-transparent" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn text-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center">
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Language<i class="fa-solid fa-angle-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu no-radius border-0 shadow">
                                <li><a class="dropdown-item" href="javascript:void(0)">English</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Bengali</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)">View More</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Currency<i class="fa-solid fa-angle-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu no-radius border-0 shadow">
                                <li><a class="dropdown-item" href="javascript:void(0)">Rupees</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Rubel</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Doller</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)">View More</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2 border rounded-circle position-relative" style="padding: 0px 5px;">
                            <a class="nav-link text-black" href="{{ route('order-summery') }}"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                            <span class="position-absolute bg-warning rounded-circle" style="padding: 0px 8px; right: -30%; top: -20%;">9</span>
                        </li>
                        <li class="nav-item mx-2 border rounded-circle position-relative" style="padding: 0px 5px;">
                            <a class="nav-link text-black" type="button" data-bs-toggle="offcanvas" data-bs-target="#wishlist" aria-controls="wishlist"><i class="fa-regular fa-heart"></i></a>
                            <span class="position-absolute bg-warning rounded-circle" style="padding: 0px 8px; right: -30%; top: -20%;">9</span>
                        </li>
                        <li class="nav-item ms-2 border rounded-circle position-relative" style="padding: 0px 5px;">
                            <a class="nav-link text-black" type="button" data-bs-toggle="offcanvas" data-bs-target="#viewCart" aria-controls="viewCart"><i class="fa-solid fa-bag-shopping"></i></a>
                            <span class="position-absolute bg-warning rounded-circle" style="padding: 0px 8px; right: -30%; top: -20%;">9</span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg px-5 py-3">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="javascript:void(0)navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-4">
                            <a class="nav-link text-black" href="javascript:void(0)"><i class="bi bi-grid me-2 text-warning"></i>All Categories</a>
                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link text-black" href="{{ url('/') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu no-radius border-0 shadow">
                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop<i class="fa-solid fa-angle-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu no-radius border-0 shadow">
                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Product<i class="fa-solid fa-angle-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu no-radius border-0 shadow">
                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mega Menu<i class="fa-solid fa-angle-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu no-radius border-0 shadow">
                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog<i class="fa-solid fa-angle-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu no-radius border-0 shadow">
                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages<i class="fa-solid fa-angle-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu no-radius border-0 shadow">
                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Seller<i class="fa-solid fa-angle-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu no-radius border-0 shadow">
                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{--navbar--}}
    <main id="main-content">
        @yield('content')
    </main>
    @yield('javascript')

</body>

</html>