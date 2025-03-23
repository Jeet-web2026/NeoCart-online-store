<?php

namespace App\Http\Controllers;

use App\Models\Vendor;

class HomeController extends Controller
{
    public function index()
    {
        $TopSellors = Vendor::latest()->take(4)->get();
        return view('index', compact('TopSellors'));
    }
}
