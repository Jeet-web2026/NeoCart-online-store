<x-DefaultLayout title="NeoCart">

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

    <x-Navbar />
    {{--main-content--}}
    <main id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </main>
    {{--main-content--}}
    <x-Footer />

</x-DefaultLayout>