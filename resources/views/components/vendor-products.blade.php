<div class="tab-pane fade" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab" tabindex="0">
    <x-vendor-inner-nav :links="[
        
        ['name' => 'all products', 'idname' => 'vendor-all-products'],
        ['name' => 'add products', 'idname' => 'vendor-manage-products'],
        
        ]" />
    <div class="vendor-products overflow-hidden" style="height: 100vh;">
        <div class="all-products overflow-auto" style="height: 100vh;">
            <div class="container-fluid" style="padding-top: 10vh;">
                <div id="product-view" class="row">
                </div>
                <div id="product-view-modals">
                    
                </div>
            </div>
        </div>
        <div class="manage-products overflow-auto" style="height: 100vh;">
            <div class="container-fluid" style="padding-top: 10vh;">
                <form class="p-3" enctype="multipart/form-data" id="vendor-product-add-form">
                    @csrf
                    <div class="vendor-product-form-result"></div>
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
                            <input type="text" class="form-control shadow-none fze-1 text-black text-capitalize" placeholder="Product price" id="product-price" name="product-price">
                        </div>
                        <div class="col ps-1">
                            <input type="text" class="form-control shadow-none fze-1 text-black text-capitalize" placeholder="Available discount" id="product-discount" name="product-discount">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col pe-2">
                            <input type="text" class="form-control shadow-none fze-1 text-black text-capitalize" placeholder="Company name" id="product-company" name="product-company">
                        </div>
                        <div class="col ps-1">
                            <input type="text" class="form-control shadow-none fze-1 text-black text-capitalize" placeholder="Available products count" id="available-product" name="available-product">
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