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

    public function signupVerification(Request $request)
    {
        $userData = $request->validate([
            'user-full-name' => 'required|min:3',
            'user-email-address' => 'required|email',
            'user-password' => 'required|min:6',
            'user-address' => 'required'
        ]);
        $matchDetails = [
            'username' => $userData['user-full-name'],
            'useremail' => strtolower($userData['user-email-address']),
            'userpassword' => $userData['user-password'],
            'useraddress' => $userData['user-address'],
        ];

        User::create($matchDetails);
        return redirect()->route('user.login');
    }
}
