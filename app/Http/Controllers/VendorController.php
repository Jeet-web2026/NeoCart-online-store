<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use GuzzleHttp\Psr7\Response;
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
        ], [
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

        $matchData = [
            'product_name' => $getData['product-name'],
            'product_price' => $getData['product-price'],
            'product_discount' => $getData['product-discount'],
            'product_company_name' => $getData['product-company'],
            'product_available' => $getData['available-product'],
            'product_description' => $getData['product-description'],
        ];

        if ($request->hasFile('product-image')) {
            $matchData['product_image'] = $request->file('product-image')->store('products', 'public');
        }

        Vendor::create($matchData);
        return response()->json(['success' => 'Product added successfully!']);
    }

    public function FetchVendorProducts()
    {
        $fetchProducts = Vendor::all();
        return response()->json($fetchProducts);
    }
}
