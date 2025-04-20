<x-MainLayout bootstrap="active" bIcons="active">
    <x-Navbar />

    {{--main content start--}}
    <main id="main-content">
        <div class="row h-100 w-100">
            <div class="col-md-6">
                <div class="card h-100 w-100 border-0 px-5 bg-transparent">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="mt-5">
                            <h1 class="text-capitalize fw-bold text-light lh-sm">we take care of your IT solutions & provide best services</h1>
                            <div class="d-flex justify-content-start align-items-center mt-5">
                                <a href="javascript:void(0)" class="btn shadow-sm border-0 text-light text-capitalize contact-now px-4 py-2 me-3">get contact now<i class="bi bi-phone-flip ms-2"></i></a>
                                <a href="javascript:void(0)" class="text-capitalize text-light text-decoration-none view-services border rounded px-4 py-2">view services<i class="bi bi-box-arrow-in-up-right ms-2"></i></a>
                            </div>
                        </div>
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

        #main-content .contact-now {
            background-color: #5404f5;
        }

        #main-content .view-services {
            border-color: #5404f5 !important;
        }
    </style>
    @endsection
</x-MainLayout>