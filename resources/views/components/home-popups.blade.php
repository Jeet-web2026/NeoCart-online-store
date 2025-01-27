{{--wishlist--}}
<div class="offcanvas offcanvas-start bg-warning" data-bs-scroll="true" tabindex="-1" id="wishlist" aria-labelledby="wishlistLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-center" id="wishlistLabel">My Wishlist</h5>
        <button type="button" class="btn-close border-0 shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex justify-content-center align-items-center">
        <x-loginForm />
    </div>
</div>
{{--wishlist--}}

{{--cart--}}
<div class="offcanvas offcanvas-start bg-warning" data-bs-backdrop="static" tabindex="-1" id="viewCart" aria-labelledby="viewCartLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="viewCartLabel">Offcanvas</h5>
        <button type="button" class="btn-close border-0 shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex justify-content-center align-items-center">
        <x-loginForm />
    </div>
</div>
{{--cart--}}