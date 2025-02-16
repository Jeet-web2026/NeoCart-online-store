<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('signup-page');
    }

    public function login()
    {
        return view('login-page');
    }

    public function signupverifcation(Request $request){
        $request->validate([
            'user-full-name' => 'required|min:3',
            'user-email-address' => 'required|email',
            'user-password' => 'required|min:6',
            'user-address' => 'required'
        ]);
        $matchDetails = [
            'username' => 'user-full-name',
            'useremail' => 'user-email-address',
            'userpassword' => 'user-password',
            'useraddress' => 'user-address',
        ];

        User::create($matchDetails);
    }
}
