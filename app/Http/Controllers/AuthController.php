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
            'user-email-address' => 'required|email|unique:users,useremail',
            'user-password' => 'required|min:6',
            'user-address' => 'required'
        ], [
            'user-full-name.required'     => 'Name is required.',
            'user-full-name.min'     => 'Name must be at least 3 characters long.',
            'user-email-address.required' => 'The email field cannot be empty.',
            'user-email-address.email'    => 'Please enter a valid email address.',
            'user-email-address.unique'   => 'This email is already registered.',
            'user-password.required'      => 'Please enter a password.',
            'user-password.min'           => 'Password must be at least 6 characters long.',
            'user-address.required'       => 'The address field is required.'
        ]);

        User::create([
            'username' => $userData['user-full-name'],
            'useremail' => strtolower($userData['user-email-address']),
            'userpassword' => $userData['user-password'],
            'useraddress' => $userData['user-address'],
        ]);

        return redirect()->route('user-login')->with('success', 'Account created successfully, login now!');
    }
}
