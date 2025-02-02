<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return response()->json([
            'message' => 'Register successfully!'
        ]);
    }


    public function wishlistLogin(Request $request)
    {
        $vallidatedata = $request->validate([
            'user-name-login' => 'required|min:2',
            'user-email-login' => 'required|email',
            'user-password-login' => 'required|min:5'

        ]);

        $credentials = [
            'name' => $vallidatedata['user-name-login'],
            'email' => $vallidatedata['user-email-login'],
            'password' => $vallidatedata['user-password-login'],
        ];

        if (Auth::guard('web')->attempt($credentials)) {
            return response()->json([
                'message' => 'Login successfully!',
            ]);
        } else {
            return response()->json([
                'message' => 'Invalid credentials, please try again!',
            ]);
        };
    }

    public function wishlistlogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
        ->with('logout-message-body', 'Logout successfully!');
    }
}
