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
                <form class="p-3">
                    <div class="mb-3">
                        <label for="product-image" class="form-label text-capitalize fze-1 text-black">product image</label>
                        <input type="file" class="form-control shadow-none fze-1 text-black text-capitalize" id="product-image" name="product-image">
                    </div>
                    <div class="mb-3">
                        <label for="product-name" class="form-label text-capitalize fze-1 text-black">product name</label>
                        <input type="text" class="form-control shadow-none fze-1 text-black text-capitalize" id="product-name" name="product-name">
                    </div>
                    <div class="row mb-3">
                        <div class="col pe-2">
                            <input type="text" class="form-control shadow-none fze-1 text-black text-capitalize" placeholder="Product price" aria-label="First name">
                        </div>
                        <div class="col ps-1">
                            <input type="text" class="form-control shadow-none fze-1 text-black text-capitalize" placeholder="Available discount" aria-label="Last name">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="product-description" class="form-label text-capitalize fze-1 text-black">product description</label>
                        <textarea class="form-control shadow-none fze-1 text-black text-capitalize" id="product-description" rows="3" name="product-description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-success shadow-none fze-1 px-4">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>