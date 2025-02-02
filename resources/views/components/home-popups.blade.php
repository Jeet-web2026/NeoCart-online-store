{{--wishlist--}}
<div class="offcanvas offcanvas-start bg-warning" data-bs-scroll="true" tabindex="-1" id="wishlist" aria-labelledby="wishlistLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-center" id="wishlistLabel">My Wishlist</h5>
        <button type="button" class="btn-close border-0 shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex justify-content-center align-items-center">
        @if(auth('web')->check())
        <form class="d-flex" method="POST" action="{{ route('wishlist-logout') }}">
            @csrf
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        @else
        <x-signupform FormInputidName="user-name" FormInputemailName="user-email" pincode="user-pincode" FormInputpasswordName="user-password" FormId="signup-form" action="" />
        <x-loginForm FormInputidName="user-name-login" FormInputemailName="user-email-login" FormInputpasswordName="user-password-login" FormId="login-form" action="" />
        @endif
    </div>
</div>
{{--wishlist--}}

{{--cart--}}
<div class="offcanvas offcanvas-start bg-warning" data-bs-backdrop="static" tabindex="-1" id="viewCart" aria-labelledby="viewCartLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-black" id="viewCartLabel">My orders</h5>
        <button type="button" class="btn-close border-0 shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex justify-content-center align-items-center">
        <x-signupform FormInputidName="user-name" FormInputemailName="user-email" pincode="user-pincode" FormInputpasswordName="user-password" FormId="signup-form" action="" />
        <x-loginForm FormInputidName="user-name-login" FormInputemailName="user-email-login" FormInputpasswordName="user-password-login" FormId="login-form" action="" />
    </div>
</div>
{{--cart--}}