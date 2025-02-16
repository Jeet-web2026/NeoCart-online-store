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
        $Data = $request->validate([
            'user-full-name' => 'required|min:3',
            'user-email-address' => 'required|email',
            'user-password' => 'required|min:6',
            'user-address' => 'required'
        ]);
        $matchDetails = [
            'username' => $Data['user-full-name'],
            'useremail' => strtolower($Data['user-email-address']),
            'userpassword' => $Data['user-password'],
            'useraddress' => $Data['user-address'],
        ];

        User::create($matchDetails);
        return redirect()->route('user.login');
    }
}
