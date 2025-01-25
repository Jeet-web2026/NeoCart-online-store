<x-home-layout>
    @section('page-css')
    <link rel="stylesheet" href="{{ asset('essentials/css/home-style.css') }}">
    @endsection
    <section class="home-main-content w-100 p-5">
        <div class="row px-5 align-items-center">
            <div class="col-md-9 pe-2">
                <div class="card border-0">
                    <img src="https://img.freepik.com/free-photo/desk-workspace-with-various-elements_23-2148043276.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357" class="card-img" alt="main-back">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <div class="row p-3">
                            <div class="col-md-8">
                                <h6 class="text-uppercase text-warning">branded</h6>
                                <h5 class="card-title text-black fs-2 my-2 fw-bold text-capitalize font-500">office equipments</h5>
                                <p class="card-text text-secondary">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="javascript:void(0)" class="bg-warning btn border-0 mt-3 text-light">Shop Now</a>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ps-3">
                <div class="card border-0">
                    <img src="https://img.freepik.com/free-photo/flat-lay-stationary-arrangement-desk-with-yellow-supplies_23-2148404491.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357" class="card-img" alt="main-back-2">
                    <div class="card-img-overlay p-3">
                        <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <center class="mt-3">
                            <a href="javascript:void(0)" class="bg-warning btn border-0 mt-2 text-light">Shop Now</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-home-layout>