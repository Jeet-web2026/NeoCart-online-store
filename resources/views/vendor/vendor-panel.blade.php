<x-DefaultLayout title="Dashboard">
    <section id="dashboard">
        <div class="container-fluid px-0 h-100">
            <div class="row h-100">
                <div class="col-md-12">
                    <div class="d-flex align-items-start h-100">
                        <div class="nav flex-column nav-pills me-3 px-3 pt-4 bg-dark h-100" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 15%;">
                            <a href="{{ route('vendor-dashboard') }}" class="mb-4">
                                <center>
                                    <img src="https://img.freepik.com/free-vector/follow-me-social-business-theme-design_24877-52233.jpg" alt="vendor-name" class="rounded-circle shadow-sm">
                                </center>
                            </a>
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent" style="width: 75%;">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
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