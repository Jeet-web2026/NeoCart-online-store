<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index(Request $request)
    {
        $credentials = $request->validate([
''
        ]);

        return view('admin.index');
    }
}
