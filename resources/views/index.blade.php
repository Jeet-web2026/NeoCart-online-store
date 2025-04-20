<x-MainLayout bootstrap="active" bIcons="active">
    <x-Navbar />

    {{--main content start--}}
    <main id="main-content">
        <div class="row h-100 w-100">
            <div class="col-md-6">
                <div class="card h-100 w-100 border-0 px-5 bg-transparent">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <h1 class="text-capitalize fw-bold text-light lh-base">we take care of your IT solutions & provide best services</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </main>
    {{--main content start--}}

    <x-HomePopups />
    @section('extracss')
    <style>
        #main-content {
            height: 100vh;
            width: 100%;
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 34%, rgba(0, 212, 255, 1) 100%);
        }

        #main-content h1 {
            font-size: 3rem;
            text-shadow: 2px 2px #323232;
        }
    </style>
    @endsection
</x-MainLayout>