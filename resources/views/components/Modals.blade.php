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
        <h5 class="offcanvas-title" id="wishlist-sectionLabel">Backdrop with scrolling</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        @if(Auth::guard('web')->check())
        <p>Welcome {{ Auth::guard('web')->user()->username }}!</p>
        @endif
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