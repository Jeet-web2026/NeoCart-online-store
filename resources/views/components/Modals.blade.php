{{--search modal--}}
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="searchModalLabel">Search box</h1>
                <button type="button" class="btn-close border-0 shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@Search</span>
                    <input type="text" class="form-control" placeholder="Search your query" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary shadow-none" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                <button type="button" class="btn btn-outline-success shadow-none">Search</button>
            </div>
        </div>
    </div>
</div>
{{--search modal--}}

{{--wishlist offcanvas--}}
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="wishlist-section" aria-labelledby="wishlist-sectionLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title w-100" id="wishlist-sectionLabel">
            <div class="card border-0 bg-transaprent w-100">
                <div class="card-body px-0">
                    @if(Auth::guard('web')->check())
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-capitalize fze-2 mb-2"><i class="fa-solid fa-heart me-2"></i>wishlist</h3>
                            <h3 class="text-capitalize fze-2 fw-bold">{{ Auth::guard('web')->user()->username }}</h3>
                        </div>
                        <div>
                            <div class="btn-group dropend">
                                <button type="button" class="btn shadow-none border-0" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                </button>
                                <ul class="dropdown-menu ms-3">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Extra items</a></li>
                                    <form action="{{ route('user-logout') }}" method="POST">
                                        @csrf
                                        <li><button class="dropdown-item" type="submit">Logout</button></li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-capitalize fze-2">welcome to NeoCart</h3>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </h5>
        <button type="button" class="position-absolute btn btn-dark" style="bottom: 2%; left: 80%;" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
    </div>
    <div class="offcanvas-body">
        @if(Auth::guard('web')->check())
        <div class="card mb-3 shadow border-0 overflow-hidden">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://img.freepik.com/free-photo/workplace-with-open-laptop-modern-wooden-desk-with-camera-alarm-clock_23-2147979104.jpg" class="rounded-start" style="height: 16vh; width: 20vh;" alt="product-image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize fze-1">product name</h5>
                        <p class="card-text text-capitalize fze text-warning mb-2">product ratings</p>
                        <p class="card-text text-capitalize fze">300/-</p>
                        <a href="javascript:void(0)" class="btn btn-dark border-0 shadow-none fze mt-2">Order now</a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="d-flex justify-content-center align-items-center h-100 w-100">
            <div>
                <h3 class="fze-2">You are not login yet!</h3>
                <div class="d-flex align-items-center mt-3 justify-content-center">
                    <a href="{{ route('user-login') }}" class="btn btn-dark border-0 shadow-none fze-1 me-2">Login</a>
                    <a href="{{ route('user-signup') }}" class="btn btn-dark border-0 shadow-none fze-1">Signup</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
{{--wishlist offcanvas--}}

{{--cart offcanvas--}}
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="cart-offcanvas" aria-labelledby="cart-offcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title w-100" id="cart-offcanvasLabel">
            <div class="card border-0 bg-transaprent w-100">
                <div class="card-body px-0">
                    @if(Auth::guard('web')->check())
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-capitalize fze-2 mb-2"><i class="fa-solid fa-heart me-2"></i>wishlist</h3>
                            <h3 class="text-capitalize fze-2 fw-bold">{{ Auth::guard('web')->user()->username }}</h3>
                        </div>
                        <div>
                            <div class="btn-group dropend">
                                <button type="button" class="btn shadow-none border-0" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                </button>
                                <ul class="dropdown-menu ms-3">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Extra items</a></li>
                                    <form action="{{ route('user-logout') }}" method="POST">
                                        @csrf
                                        <li><button class="dropdown-item" type="submit">Logout</button></li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-capitalize fze-2">welcome to NeoCart</h3>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </h5>
        <button type="button" class="position-absolute btn btn-dark" style="bottom: 2%; left: 80%;" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
    </div>
    <div class="offcanvas-body">
        @if(Auth::guard('web')->check())
        <div class="card mb-3 shadow border-0 overflow-hidden">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://img.freepik.com/free-photo/workplace-with-open-laptop-modern-wooden-desk-with-camera-alarm-clock_23-2147979104.jpg" class="rounded-start" style="height: 16vh; width: 20vh;" alt="product-image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize fze-1">product name</h5>
                        <p class="card-text text-capitalize fze text-warning mb-2">product ratings</p>
                        <p class="card-text text-capitalize fze">300/-</p>
                        <a href="javascript:void(0)" class="btn btn-dark border-0 shadow-none fze mt-2">Order now</a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="d-flex justify-content-center align-items-center h-100 w-100">
            <div>
                <h3 class="fze-2">You are not login yet!</h3>
                <div class="d-flex align-items-center mt-3 justify-content-center">
                    <a href="{{ route('user-login') }}" class="btn btn-dark border-0 shadow-none fze-1 me-2">Login</a>
                    <a href="{{ route('user-signup') }}" class="btn btn-dark border-0 shadow-none fze-1">Signup</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
{{--cart offcanvas--}}

{{--logout-popup--}}
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="logout-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto fze-2">Logout</strong>
            <small>0 mins ago</small>
            <button type="button" class="btn-close border-0 shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            @if(session('logout'))
            <p class="fze-1">{{ session('logout') }}</p>
            @endif
        </div>
    </div>
</div>
{{--logout-popup--}}

{{--logout-popup--}}
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="login-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto fze-2">Login success!</strong>
            <small>0 mins ago</small>
            <button type="button" class="btn-close border-0 shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            @if(session('login'))
            <p class="fze-1">{{ session('login') }}</p>
            @endif
        </div>
    </div>
</div>
{{--logout-popup--}}