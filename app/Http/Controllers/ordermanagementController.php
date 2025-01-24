<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordermanagementController extends Controller
{
    public function orderSummery()
    {
        return view('productmanagement.ordersummery');
    }
}
