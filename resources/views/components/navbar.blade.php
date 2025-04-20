<header class="w-100 fixed-top shadow">
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container-fluid px-5">
            <a class="navbar-brand text-light" href="{{ url('/') }}">
                <img src="{{ asset('essentials/images/main-logo.png') }}" alt="main-website-logo" class="main-web-side-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NeoCartNavbar" aria-controls="NeoCartNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="NeoCartNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-black" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu no-radius border-0 shadow-sm">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex contact-section me-5">
                <a href="tel:+919163715179" class="text-light text-decoration-none">
                    <span class="d-flex justify-content-center align-items-center">
                        <i class="bi bi-telephone-fill rounded-circle me-2"></i>
                        <span>
                            <p class="text-decoration-none text-black mb-0">Make a call</p>
                            <p class="text-decoration-none text-black mb-0">+91 9163715179</p>
                        </span>
                    </span>
                </a>
            </div>
            <button class="btn border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#hamburger-menu" aria-controls="hamburger-menu">
                <i class="bi bi-list text-black fs-5"></i>
            </button>
        </div>
    </nav>
</header>