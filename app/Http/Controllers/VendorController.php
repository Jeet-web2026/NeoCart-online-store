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
            
        ]);
    }
}
