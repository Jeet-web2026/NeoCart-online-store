<x-DefaultLayout bodyClass="position-relative">

    @section('extracsscdns')
    {{--swiper css cdn--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{--swiper css cdn--}}
    @endsection
    @section('extrajscdns')
    {{--jquery js cdn--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--jquery js cdn--}}
    {{--slick js cdn--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--slick js cdn--}}
    {{--swiper js cdn--}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{--swiper js cdn--}}
    @endsection
    @section('extrajs')
    <script>
        $(document).ready(function() {
            var swiper = new Swiper(".mainslider", {
                cssMode: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                mousewheel: true,
                keyboard: true,
            });
            $('.showcase-products').slick({
                dots: false,
                infinite: true,
                speed: 300,
                arrows: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('.showcase-products .slick-prev').hide();

            let logoutMessage = "{{ session('logout') }}";
            if (logoutMessage) {
                let toastElement = new bootstrap.Toast(document.getElementById('logout-toast'));
                toastElement.show();
            }
            let loginMessage = "{{ session('login') }}";
            if (loginMessage) {
                let toastElement = new bootstrap.Toast(document.getElementById('login-toast'));
                toastElement.show();
            }
        });
    </script>
    @endsection
    @section('extracss')
    <style>
        #mainContent {
            height: 100vh;
            width: 100%;
            padding-top: 18vh;
        }

        #mainContent .swiper {
            width: 100%;
            height: 100%;
        }

        #mainContent .swiper-slide {
            display: flex;
            align-items: center;
        }

        #mainContent .side-back {
            height: 70vh;
            width: 40vw;
        }

        #mainContent .swiper-button-next {
            padding: 2.3%;
        }

        #mainContent .swiper-button-prev {
            padding: 2.3%;
        }

        /* showcase start */
        #showcase .show-case-img {
            height: 10vh;
            width: 10vh;
            object-fit: cover;
        }

        #showcase {
            background-color: #F8F3F0;
        }

        /* showcase end */

        /* shop by categories start */
        #shopbyCategories {
            background-color: #FCFAFB;
        }

        #shopbyCategories .col-md-3 .card-img-top {
            height: 40vh;
            mix-blend-mode: multiply;
        }

        /* shop by categories end */

        /* notificationshowcase start */
        #notificationshowcase .img-fluid {
            height: 30vh;
            width: 100%;
        }

        /* notificationshowcase end */

        /* neocartsspecial start */
        #neocartsspecial .img-fluid{
            height: 40vh;
            width: 100%;
        }
        /* neocartsspecial end */
    </style>
    @endsection

    <x-Navbar />
    {{--main-content--}}
    <main id="mainContent" class="position-relative bg-secondary  bg-opacity-10">
        <div class="container-fluid h-100">
            <div class="swiper mainslider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide px-3">
                        <div class="row w-100 px-5 align-items-center">
                            <div class="col-md-6">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body">
                                        <h1 class="text-uppercase fw-bold m-font fze-5 mb-3 mt-4">shop computers & accessories</h1>
                                        <p class="text-black text-capitalize">shop laptops, desktops, monitors, tablets, PC, gaming hardware devices & storage accessories and more...</p>
                                        <x-main-button buttondes="View more" xtraclass="mt-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <div class="bg-warning position-absolute z-1 rounded-circle p-2 text-light" style="top: 10%; right: 15%;">
                                    <p class="text-center text-capitalize fze-2">50%</p>
                                </div>
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body">
                                        <img src="{{ asset('essentials/images/side_back.png') }}" alt="side-back" class="side-back float-end">
                                    </div>
                                </div>
                                <div class="card border-0 shadow position-absolute w-50 rounded-start-pill ps-3" style="bottom: 20%; left: -5%; z-index: -1;">
                                    <div class="card-body">
                                        <p class="text-capitalize text-truncate text-black fze-2 fw-bold">dells laptop</p>
                                        <div class="d-flex align-items-center mt-1">
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-2"></i>
                                        </div>
                                        <p class="text-black mt-1">(1,368 reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide px-3">
                        <div class="row w-100 px-5 align-items-center">
                            <div class="col-md-6">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body">
                                        <h1 class="text-uppercase fw-bold m-font fze-5 mb-3 mt-4">buy hardwares & softwares</h1>
                                        <p class="text-black text-capitalize">shop laptops, desktops, monitors, tablets, PC, gaming hardware devices & storage accessories and more...</p>
                                        <x-main-button buttondes="View more" xtraclass="mt-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <div class="bg-warning position-absolute z-1 rounded-circle p-2 text-light" style="top: 10%; right: 15%;">
                                    <p class="text-center text-capitalize fze-2">50%</p>
                                </div>
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body">
                                        <img src="{{ asset('essentials/images/side_back.png') }}" alt="side-back" class="side-back float-end">
                                    </div>
                                </div>
                                <div class="card border-0 shadow position-absolute w-50 rounded-start-pill ps-3" style="bottom: 20%; left: -5%; z-index: -1;">
                                    <div class="card-body">
                                        <p class="text-capitalize text-truncate text-black fze-2 fw-bold">dells laptop</p>
                                        <div class="d-flex align-items-center mt-1">
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-2"></i>
                                        </div>
                                        <p class="text-black mt-1">(1,368 reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next shadow rounded-circle text-black"></div>
                <div class="swiper-button-prev shadow rounded-circle text-black"></div>
            </div>
        </div>
    </main>
    {{--main-content--}}

    {{--showcase section--}}
    <section id="showcase">
        <div class="container-fluid px-5 py-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 bg-transparent">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-3">
                                <div class="card border-0 bg-transparent">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-3">
                                            <img src="https://img.freepik.com/free-photo/smart-looking-teacher_53876-23045.jpg" class="rounded-circle show-case-img" alt="show-case-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                @if(Auth::guard('web')->check())
                                                <h5 class="card-title fze-2 font-500">Hi
                                                    {{ Auth::guard('web')->user()->username }}
                                                </h5>
                                                @else
                                                <h5 class="card-title fze-2 font-500">Hi NeoCart user</h5>
                                                @endif
                                                <p class="card-text fze text-capitalize">recomendations for you!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row showcase-products">
                                    <div class="col p-2">
                                        <div class="card border-0 bg-transparent shadow-sm">
                                            <div class="card-body">
                                                <div class="card border-0 bg-transparent">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="https://img.freepik.com/free-psd/3d-brown-parcel-box-shipping-online-delivery-concept-illustration-background_56104-2614.jpg" class="img-fluid rounded-start" alt="order-box-img">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title text-capitalize fze-1">your orders</h5>
                                                                <p class="card-text text-capitalize fze">view your orders</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-2">
                                        <div class="card border-0 border-0 bg-transparent shadow-sm">
                                            <div class="card-body">
                                                <div class="card border-0 border-0 bg-transparent">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="https://img.freepik.com/free-psd/3d-brown-parcel-box-shipping-online-delivery-concept-illustration-background_56104-2614.jpg" class="img-fluid rounded-start" alt="order-box-img">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title text-capitalize fze-1">your orders</h5>
                                                                <p class="card-text text-capitalize fze">view your orders</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-2">
                                        <div class="card border-0 border-0 bg-transparent shadow-sm">
                                            <div class="card-body">
                                                <div class="card border-0 border-0 bg-transparent">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="https://img.freepik.com/free-psd/3d-brown-parcel-box-shipping-online-delivery-concept-illustration-background_56104-2614.jpg" class="img-fluid rounded-start" alt="order-box-img">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title text-capitalize fze-1">your orders</h5>
                                                                <p class="card-text text-capitalize fze">view your orders</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-2">
                                        <div class="card border-0 border-0 bg-transparent shadow-sm">
                                            <div class="card-body">
                                                <div class="card border-0 border-0 bg-transparent">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="https://img.freepik.com/free-psd/3d-brown-parcel-box-shipping-online-delivery-concept-illustration-background_56104-2614.jpg" class="img-fluid rounded-start" alt="order-box-img">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title text-capitalize fze-1">your orders</h5>
                                                                <p class="card-text text-capitalize fze">view your orders</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-2">
                                        <div class="card border-0 border-0 bg-transparent shadow-sm">
                                            <div class="card-body">
                                                <div class="card border-0 border-0 bg-transparent">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="https://img.freepik.com/free-psd/3d-brown-parcel-box-shipping-online-delivery-concept-illustration-background_56104-2614.jpg" class="img-fluid rounded-start" alt="order-box-img">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title text-capitalize fze-1">your orders</h5>
                                                                <p class="card-text text-capitalize fze">view your orders</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--showcase section--}}

    {{--shop by categories section--}}
    <section id="shopbyCategories">
        <div class="container-fluid px-5 py-3">
            <div class="row">
                <div class="col-md-12 mt-2 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-capitalize fze-2 font-500">shop by categories</p>
                        <a href="javascript:void(0)" class="text-capitalize fze-2 font-500 text-dark">all departments<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-3 pe-2">
                    <div class="card border-0 shadow-sm">
                        <img src="https://img.freepik.com/free-photo/3d-workstation-with-computer-peripheral-devices_23-2150714185.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid" class="card-img-top" alt="products-img">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize fze-2">hardware accessories</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pe-2">
                    <div class="card border-0 shadow-sm">
                        <img src="https://img.freepik.com/free-photo/computerchip-technology-electronics-industry_93675-128229.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid" class="card-img-top" alt="products-img">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize fze-2">best quality ram's</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pe-2">
                    <div class="card border-0 shadow-sm">
                        <img src="https://img.freepik.com/free-vector/3d-realistic-collection-different-screens_1441-2741.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid" class="card-img-top" alt="products-img">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize fze-2">best quality monitor</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="https://img.freepik.com/free-photo/business-desk-arrangement-with-itmes_23-2148128299.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid" class="card-img-top" alt="products-img">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize fze-2">mouse</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--shop by categories section--}}

    {{--notificationshowcase section--}}
    <section id="notificationshowcase">
        <div class="container-fluid px-5 py-3">
            <div class="row">
                <div class="col-md-6 pe-1">
                    <div class="card border-0 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-black fze-2">Card title</h5>
                                    <p class="card-text my-3 fze-1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="javascript:void(0)" class="text-dark text-capitalize fze-1">see more<i class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="https://img.freepik.com/free-photo/still-life-books-versus-technology_23-2150062920.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid" class="img-fluid rounded-end" alt="laptop-with-exciting-offers">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ps-1">
                    <div class="card border-0 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-black fze-2">Card title</h5>
                                    <p class="card-text my-3 fze-1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="javascript:void(0)" class="text-dark text-capitalize fze-1">see more<i class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="https://img.freepik.com/free-photo/close-up-different-digital-devices_1232-776.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid" class="img-fluid rounded-end" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--notificationshowcase section--}}

    {{--neocartspecials section--}}
    <section id="neocartsspecial">
        <div class="container-fluid px-5 py-3">
            <div class="card border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-8 ps-5 py-5">
                        <div class="card-body">
                            <h5 class="card-title fze-1 text-capitalize text-secondary">NeoCarts special offers</h5>
                            <h2 class="text-uppercase text-black fw-bold fze-4">NeoCart delivers to you</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://img.freepik.com/free-photo/laptop-near-toy-sign-credit-card-supermarket-cart_23-2147949870.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid" class="img-fluid rounded-end" alt="neocart-special">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--neocartspecials section--}}

    <x-Footer />
    <x-Modals />

</x-DefaultLayout>