<x-MainLayout bootstrap="active" bIcons="active">
    <x-Navbar />

    {{--main content start--}}
    <main id="main-content">
        <div class="bg-overlay"></div>
        <div class="row h-100 w-100">
            <div class="col-md-6">
                <div class="card h-100 w-100 border-0 px-5 bg-transparent">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="mt-5">
                            <h1 class="text-capitalize fw-bold text-light lh-sm">we take care of your IT solutions & provide best services</h1>
                            <div class="d-flex justify-content-start align-items-center mt-4">
                                <a href="javascript:void(0)" class="btn shadow-sm border-0 text-light text-capitalize contact-now px-4 py-2 me-3">get contact now<i class="bi bi-phone-flip ms-2"></i></a>
                                <a href="javascript:void(0)" class="text-capitalize text-light text-decoration-none border-light view-services border rounded px-4 py-2">view services<i class="bi bi-box-arrow-in-up-right ms-2"></i></a>
                            </div>
                            <div class="row mt-5 w-50 align-items-center">
                                <div class="col-md-6 pe-1">
                                    <div class="d-flex justify-content-start align-items-center position-relative customer-details">
                                        <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="profile-img" class="rounded-circle shadow-sm customer-info-img">
                                        <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="profile-img" class="rounded-circle shadow-sm customer-info-img position-absolute second-cm">
                                        <img src="https://img.freepik.com/free-photo/closeup-young-female-professional-making-eye-contact-against-colored-background_662251-651.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="profile-img" class="rounded-circle shadow-sm customer-info-img position-absolute third-cm">
                                        <img src="https://img.freepik.com/free-photo/close-up-portrait-young-bearded-man-white-shirt-jacket-posing-camera-with-broad-smile-isolated-gray_171337-629.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="profile-img" class="rounded-circle shadow-sm customer-info-img position-absolute fourth-cm">
                                    </div>
                                </div>
                                <div class="col-md-6 ps-1">
                                    <p class="text-capitalize text-light mb-0">transfer 1600+ ideas to reality</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 w-100 bg-transparent border-0">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="card contact-form mt-5 shadow bg-gradient bg-light">
                            <div class="card-body">
                                <h3 class="text-capitalize fs-4 fw-bold">get callback</h3>
                                <form>
                                    <div class="mb-3">
                                        <label for="connection-name" class="form-label font-500">Name</label>
                                        <input type="password" class="form-control shadow-none" id="connection-name" name="connection-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="connection-email" class="form-label">Email address</label>
                                        <input type="email" class="form-control shadow-none" id="connection-email" name="connection-email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Project topic</label>
                                        <select class="form-select shadow-none">
                                            <option value="0">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn border-0 shadow-sm enquiry-btn text-light">Enquire Now<i class="bi bi-arrow-right ms-2"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{--main content start--}}

    <x-HomePopups />
    @section('extracss')
    <style>
        #main-content {
            height: 100vh;
            width: 100%;
            background-image: url('https://img.freepik.com/free-photo/group-people-working-team_23-2147656716.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740');
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            padding-top: 10vh;
        }

        #main-content .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            background: linear-gradient(90deg, rgb(0 0 0 / 56%) 0%, rgb(9 9 121 / 56%) 34%, rgb(0 212 255 / 57%) 100%);
            ;
            height: 100%;
            width: 100%;
        }

        #main-content h1 {
            font-size: 3rem;
            text-shadow: 2px 2px #323232;
        }

        #main-content .contact-now {
            background-color: #5404f5;
        }

        #main-content .contact-form {
            width: 60%;
        }

        #main-content .enquiry-btn {
            background-color: #5404f5;
        }

        #main-content .customer-info-img {
            height: 2.5rem;
            width: 2.5rem;
            object-fit: cover;
        }

        #main-content .customer-details .second-cm {
            left: 20%;
        }

        #main-content .customer-details .third-cm {
            left: 40%;
        }
        #main-content .customer-details .fourth-cm {
            left: 60%;
        }
    </style>
    @endsection
</x-MainLayout>