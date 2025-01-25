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
                    <li class="nav-item me-2">
                        <a class="nav-link text-black" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop<i class="fa-solid fa-angle-down ms-2"></i>
                        </a>
                        <ul class="dropdown-menu no-radius border-0 shadow">
                            <li><a class="dropdown-item" href="javascript:void(0)">Latest Discounts</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">My Coupons</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0)">View More</a></li>
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
                            <li><a class="dropdown-item" href="javascript:void(0)">View More</a></li>
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
                            <li><a class="dropdown-item" href="javascript:void(0)">View More</a></li>
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
                            <li><a class="dropdown-item" href="javascript:void(0)">View More</a></li>
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
                            <li><a class="dropdown-item" href="javascript:void(0)">View More</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-black" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Seller<i class="fa-solid fa-angle-down ms-2"></i>
                        </a>
                        <ul class="dropdown-menu no-radius border-0 shadow">
                            <li><a class="dropdown-item" href="javascript:void(0)">Seller Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0)">View More</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>