<?php

namespace App\Http\Controllers;

use App\Models\LoginUser;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

        return view('index');
    }
}
