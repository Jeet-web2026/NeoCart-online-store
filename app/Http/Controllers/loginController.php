<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function wishlistRegister(Request $request)
    {

        $vallidatedata = $request->validate([
            'user-name' => 'required|min:2',
            'user-email' => 'required|email',
            'user-pincode' => 'required|min:6',
            'user-password' => 'required|min:5'

        ]);

        User::create([
            'name' => $vallidatedata['user-name'],
            'email' => $vallidatedata['user-email'],
            'password' => $vallidatedata['user-password'],
            'pincode' => $vallidatedata['user-pincode'],
        ]);

        return "Register Successfully!";
    }
}
