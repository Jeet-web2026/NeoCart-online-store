<x-DefaultLayout title="NeoCart" bodyClass="position-relative">

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
        var swiper = new Swiper(".mainslider", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            mousewheel: true,
            keyboard: true,
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

        #mainContent .side-back{
            height: 70vh;
            width: 40vw;
        }
    </style>
    @endsection

    <x-Navbar />
    {{--main-content--}}
    <main id="mainContent" class="position-relative bg-secondary  bg-opacity-10">
        <div class="container-fluid h-100">
            <div class="swiper mainslider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row w-100 px-5 align-items-center">
                            <div class="col-md-6">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body">
                                       <h1 class="text-uppercase fw-bold m-font fze-5 mb-3 mt-4">shop computers & accessories</h1>
                                       <p class="text-black text-capitalize">shop laptops, desktops, monitors, tablets, PC, gaming hardware devices & storage accessories and more...</p>
                                       <x-main-button buttondes="View more" xtraclass="mt-3"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body">
                                        <img src="{{ asset('essentials/images/side_back.png') }}" alt="side-back" class="side-back float-end">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </main>
    {{--main-content--}}
    <x-Footer />

</x-DefaultLayout>