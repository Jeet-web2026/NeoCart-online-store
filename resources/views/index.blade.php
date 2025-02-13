<x-DefaultLayout bodyClass="position-relative">

    @section('extracsscdns')
    {{--swiper css cdn--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{--swiper css cdn--}}
    @endsection
    @section('extrajscdns')
    {{--jquery js cdn--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--jquery js cdn--}}
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
    <x-Footer />
    <x-Modals/>

</x-DefaultLayout>