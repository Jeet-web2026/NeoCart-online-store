<?php

namespace App\Http\Controllers;

use App\Models\Vendor;

class HomeController extends Controller
{
    public function index()
    {

        $TopSellors = Vendor::where('id', 'desc')->take(5)->get();
        return view('index', compact('TopSellors'));
    }
}
