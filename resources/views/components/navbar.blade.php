<header class="w-100 fixed-top shadow">
    <nav class="navbar navbar-expand-lg">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
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
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex contact-section">
                <a href="tel:+919163715179" class="text-light">
                    <span class="d-flex justify-content-center align-items-center">
                        <i class="bi bi-telephone-fill rounded-circle"></i>
                        <span>
                            <p class="text-decoration-none">make a call</p>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </nav>
</header>