<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function index(Request $request)
    {
        $validatedData = $request->validate([
            'admin-email' => 'required|email|unique:admins,email',
            'admin-name' => 'required|string|max:255',
            'admin-password' => 'required|min:8'
        ]);

        AdminLogin::create([
            'admin_email' => $validatedData['admin-email'],
            'admin_name' => $validatedData['admin-name'],
            'admin_password' => Hash::make($validatedData['admin-password'])
        ]);

        return view('admin.index');
    }
}
