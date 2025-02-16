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
                            <h3 class="text-capitalize fze-2">welcome</h3>
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
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
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

    </div>
</div>
{{--wishlist offcanvas--}}

{{--cart offcanvas--}}
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="cart-offcanvas" aria-labelledby="cart-offcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="cart-offcanvasLabel">Backdrop with scrolling</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p>Try scrolling the rest of the page to see this option in action.</p>
    </div>
</div>
{{--cart offcanvas--}}