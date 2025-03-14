<x-DefaultLayout title="Dashboard">
    <section id="dashboard">
        <div class="container-fluid px-0 h-100">
            <div class="row h-100">
                <div class="col-md-12">
                    <div class="d-flex align-items-start h-100">
                        <div class="nav flex-column nav-pills me-3 px-3 pt-4 bg-dark h-100 position-relative" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 15%;">
                            <a href="{{ route('vendor-dashboard') }}" class="mb-4">
                                <center>
                                    <img src="https://img.freepik.com/free-vector/follow-me-social-business-theme-design_24877-52233.jpg" alt="vendor-name" class="rounded-circle shadow-sm">
                                </center>
                            </a>
                            <button class="nav-link active text-start fze-1" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="bi bi-house-check me-4"></i>Home</button>
                            <button class="nav-link text-start fze-1" id="v-pills-products-tab" data-bs-toggle="pill" data-bs-target="#v-pills-products" type="button" role="tab" aria-controls="v-pills-products" aria-selected="false"><i class="bi bi-box-seam me-4"></i>Products</button>
                            <button class="nav-link text-start fze-1" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false"><i class="bi bi-receipt-cutoff me-4"></i>Orders</button>
                            <button class="nav-link text-start fze-1" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-person-circle me-4"></i>Profile</button>
                            <button class="nav-link text-start fze-1" id="v-pills-subscriptions-tab" data-bs-toggle="pill" data-bs-target="#v-pills-subscriptions" type="button" role="tab" aria-controls="v-pills-subscriptions" aria-selected="false"><i class="bi bi-award me-4"></i>Subscriptions</button>
                            <div class="position-absolute" style="left: 25%; bottom: 2%;">
                                <form>
                                    @csrf
                                    <button type="submit" class="btn boreder-0 shadow-none text-light fze-1"><i class="bi bi-power me-2"></i>Logout</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent" style="width: 75%;">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">home</div>
                            <div class="tab-pane fade" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab" tabindex="0">products</div>
                            <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab" tabindex="0">orders</div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">profile</div>
                            <div class="tab-pane fade" id="v-pills-subscriptions" role="tabpanel" aria-labelledby="v-pills-subscriptions-tab" tabindex="0">subscriptions</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @section('extracss')
    <style>
        #dashboard {
            height: 100vh;
            width: 100%;
        }

        #dashboard .col-md-12 .nav img {
            height: 15vh;
            width: 15vh;
        }

        #dashboard .col-md-12 .nav .active {
            background-color: #ffffff;
            color: #111111;
        }

        #dashboard .col-md-12 .nav-link {
            color: #ffffff;
        }
    </style>
    @endsection

</x-DefaultLayout>