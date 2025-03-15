<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        return view('vendor.vendor-panel');
    }

    public function AddVendorProducts(Request $request)
    {
        $getData = $request->validate([
            'product-image' => 'required|mimes:png,jpg,jpeg|max:300',
            'product-name' => 'required|min:2',
            'product-price' => 'required|numeric',
            'product-discount' => 'required|numeric',
            'product-company' => 'required|min:2',
            'available-product' => 'required|numeric',
            'product-description' => 'required|min:5'
        ],[
            'product-image.required' => 'Image file is required!',
            'product-image.mimes' => 'Image file should be must PNG, JPG or JPEG file.',
            'product-image.max' => 'Image file is must be under 295KB.',
            'product-name.required' => 'Name is required!',
            'product-name.min' => 'Name is must be 2 characters long!',
            'product-price.required' => 'Product price is required!',
            'product-price.numeric' => 'Product price must be a number!',
            'product-discount.required' => 'Product discount is required!',
            'product-discount.numeric' => 'Product discount must be a number!',
            'product-company.required' => 'Company is required!',
            'product-company.min' => 'Company is must be 2 characters long!',
            'available-product.min' => 'Product is required!',
            'available-product.numeric' => 'Product is must be 2 characters long!',
            'product-description.required' => 'Product description is required!',
            'product-description.numeric' => 'Product description is must be 2 characters long!',
        ]);
    }
}
