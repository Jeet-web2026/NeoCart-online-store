<div class="tab-pane fade" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab" tabindex="0">
    <x-vendor-inner-nav :links="[
        
        ['name' => 'all products', 'idname' => 'vendor-all-products'],
        ['name' => 'manage products', 'idname' => 'vendor-manage-products'],
        
        ]" />
    <div class="vendor-products overflow-hidden" style="height: 100vh;">
        <div class="all-products overflow-auto" style="height: 100vh;">
            <div class="container-fluid" style="padding-top: 10vh;">
                <div class="row">
                    <div class="col-md-3 p-2">
                        <div class="card border-0 shadow-sm">
                            <img src="https://img.freepik.com/free-photo/laptop-with-blank-white-screen-books-eyeglasses-pencil-holders-paperclip-wooden-desk_23-2147979131.jpg" class="card-img-top" alt="product-image">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize fze-1 text-black mb-2">product name</h5>
                                <a href="#" class="btn btn-outline-info text-capitalize fze">view product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="manage-products">
            <div class="container-fluid" style="padding-top: 10vh;">
                <p>manage</p>
            </div>
        </div>
    </div>
</div>