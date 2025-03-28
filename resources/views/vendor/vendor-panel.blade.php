<x-DefaultLayout title="Dashboard">
    <section id="dashboard">
        <div class="container-fluid px-0 h-100">
            <div class="row h-100">
                <div class="col-md-12">
                    <div class="d-flex align-items-start h-100">
                        <div class="nav flex-column nav-pills px-3 pt-4 bg-dark h-100 position-relative shadow-sm" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 18%;">
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
                                <form action="{{ route('vendor-logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn boreder-0 shadow-none text-light fze-1"><i class="bi bi-power me-2"></i>Logout</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-content h-100 position-relative" id="v-pills-tabContent" style="width: 100%;">
                            <x-vendor-home />
                            <x-vendor-products />
                            <x-vendor-orders />
                            <x-vendor-profile />
                            <x-vendor-subscription />
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

        #dashboard #v-pills-products .all-products .card-img-top {
            height: 18vh;
            width: 100%;
            object-fit: cover;
        }
    </style>
    @endsection

    @section('extrajscdns')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endsection

    @section('extrajs')
    <script>
        $(document).ready(function() {
            $('#v-pills-products .vendor-products').find('.all-products').show().siblings().hide();

            function manageTab(NavLink, ViewTab) {
                $(document).on('click', NavLink, function() {
                    $('#v-pills-products .vendor-products').find(ViewTab).show().siblings().hide();
                });
            }
            const tabs = [{
                    nav: "#vendor-all-products",
                    view: ".all-products"
                },
                {
                    nav: "#vendor-manage-products",
                    view: ".manage-products"
                }
            ];

            tabs.forEach(tab => manageTab(tab.nav, tab.view));

            function NotificationHandle(FormId) {
                setTimeout(() => {
                    $(FormId).find('.btn-close').click();
                }, 2000);
            }

            function FetchProducts() {
                $.ajax({
                    url: "{{ route('fetch-products') }}",
                    method: "GET",
                    success: function(response) {
                        $("#product-view").html("");
                        $.each(response.products, function(index, product) {
                            let baseUrl = "{{ url('/') }}";
                            const ImageUrl = baseUrl + "/storage/" + product.product_image;
                            const ViewId = "product" + product.id;
                            let ProductCard = `
                        
                            <div class="col-md-3 p-2">
                                <div class="card border shadow-sm">
                                    <img src="${ImageUrl}" class="card-img-top" alt="product-image">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize fze-1 text-black mb-2">${product.product_name}</h5>
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-primary text-capitalize fze me-2"  data-bs-toggle="modal" data-bs-target="#${ViewId}"><i class="bi bi-eye me-2"></i>view</button>
                                        <a href="#" class="btn btn-danger text-capitalize fze"><i class="bi bi-trash me-2"></i>delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        
                        
                        `;
                            $("#product-view").append(ProductCard);
                        });
                    },
                    error: function(xhr) {
                        $("#product-view").html('No data found!');
                    }
                });
            }

            function FetchProductsforView() {
                $.ajax({
                    url: "{{ route('fetch-products') }}",
                    method: "GET",
                    success: function(response) {
                        $('#product-view-modals').html("");
                        $.each(response.products, function(index, product) {
                            let BaseUrl = "{{ url('/') }}";
                            let ImgUrl = BaseUrl + "/storage/" + product.product_image;
                            letModalId = "product" + product.id;
                            let Modal = `

                                    <div class="modal fade" id="${letModalId}" tabindex="-1" aria-labelledby="${letModalId}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="card border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <img class="border p-2 rounded" style="height: 33vh; width: 100%;" src="${ImgUrl}" alt="${product.product_name}">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item"><h5 class="card-title fze-1 fw-bold text-capitalize fw-bold text-truncate">${product.product_name}</h5></li>
                                                                    <li class="list-group-item">${product.product_price}/-</li>
                                                                    <li class="list-group-item">${product.product_discount}%</li>
                                                                    <li class="list-group-item text-capitalize text-truncate">${product.product_company_name}</li>
                                                                    <li class="list-group-item">${product.product_available} pcs.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-capitalize fze-1">${product.product_description}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            `;
                            $('#product-view-modals').append(Modal);
                        });
                    },
                    error: function(xhr) {
                        $("#product-view").html('No data found!');
                    }
                });
            }

            $(document).on('submit', '#vendor-product-add-form', function(e) {
                e.preventDefault();
                let ProductImage = $(this).find('#product-image')[0].files[0];
                let ProductName = $(this).find('#product-name').val();
                let ProductPrice = $(this).find('#product-price').val();
                let ProductDiscount = $(this).find('#product-discount').val();
                let ProductCompany = $(this).find('#product-company').val();
                let ProductAvailProduct = $(this).find('#available-product').val();
                let ProductDescription = $(this).find('#product-description').val();
                let formData = new FormData(this);
                if (!ProductImage || ProductName == "" || ProductPrice == "" || ProductDiscount == "" || ProductCompany == "" || ProductAvailProduct == "" || ProductDescription == "") {

                    $('#vendor-product-add-form .vendor-product-form-result').html(`
                    
                    <div class="alert alert-danger alert-dismissible fade show fze-1 text-center text-capitalize" role="alert">
                        <strong><i class="bi bi-exclamation-diamond me-2"></i>All fields required!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                    `);

                    NotificationHandle('#vendor-product-add-form');
                }

                $.ajax({
                    url: "{{ route('add-products') }}",
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#vendor-product-add-form').find('.vendor-product-form-result').html(`                          
                            
                        <div class="alert alert-success text-center fze-1 alert-dismissible fade show" role="alert">
                            <strong><i class="bi bi-check2-circle fs-5 me-2"></i>${response.success}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                            
                        `);

                        NotificationHandle('#vendor-product-add-form');
                        $('#vendor-product-add-form').trigger("reset");
                        FetchProducts();
                        FetchProductsforView();
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        Object.values(errors).forEach(errorArray => {
                            errorArray.forEach(errorText => {
                                $('#vendor-product-add-form').find('.vendor-product-form-result').html(`        
                            
                                        <div class="alert alert-danger text-center fze-1 alert-dismissible fade show" role="alert">
                                            <strong><i class="bi bi-exclamation-octagon fs-5 me-2"></i>${errorText}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                            
                                `);
                                NotificationHandle('#vendor-product-add-form');
                            });
                        });
                    }
                });

            });

            setTimeout(() => {
                FetchProducts();
                FetchProductsforView();
            }, 1000);

        });
    </script>
    @endsection

</x-DefaultLayout>