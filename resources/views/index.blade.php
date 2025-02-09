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
        }

        #mainContent .swiper {
            width: 100%;
            height: 100%;
        }

        #mainContent .swiper-slide {
            display: flex;
            align-items: center;
        }

        #mainContent .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    @endsection

    <x-Navbar />
    {{--main-content--}}
    <main id="mainContent" class="position-relative">
        <div class="container-fluid h-100">
            <div class="swiper mainslider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row w-100">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        This is some text within a card body.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        This is some text within a card body.
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