<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VendorLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

    public function loginVerification(Request $request)
    {
        $userData = $request->validate([
            'user-loginemail-address' => 'required|email',
            'user-loginpassword' => 'required',
        ], [
            'user-loginemail-address.required'    => 'Email address is required.',
            'user-loginemail-address.email'    => 'Please enter a valid email address.',
            'user-loginpassword.required'      => 'Please enter a password.',
        ]);

        $matchData = ([
            'useremail' => strtolower($userData['user-loginemail-address']),
            'password' => $userData['user-loginpassword'],
        ]);

        if (Auth::guard('web')->attempt($matchData)) {
            return redirect()->route('home')->with([
                'loginSuccess' => true,
                'loginsuccess' => 'You are successfully logged in!',
            ]);
        };

        return redirect()->route('user-login')->with('loginerror', 'Invalid credentials!');
    }

    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function checkGoogleauth()
    {
        $user = Socialite::driver('google')->user();

        $userCheck = User::where('google_id', $user->id)
            ->orWhere('useremail', $user->email)
            ->first();

        if ($userCheck) {
            Auth::login($userCheck);
            return redirect()->route('home')->with('login', 'Logged in successfully!');
        }
        $newUser = User::create([
            'username'       => $user->name,
            'useremail'  => $user->email,
            'google_id'  => $user->id,
            'useraddress'     => $user->avatar,
            'userpassword'   => bcrypt(str()->random(12)),
        ]);
        Auth::login($newUser);

        return redirect()->route('user-login')->with('success', 'Signed up successfully!');
    }

    public function VendorLogin()
    {
        return view('vendor.vendor-login');
    }

    public function VendorCheck(Request $request)
    {
        $getData = $request->validate([
            'vendor-login-email' => 'required|email|unique:vendor_logins,vendor_login_id',
            'vendor-login-password' => 'required'
        ],[
            'vendor-login-email.required' => 'Login email is required!',
            'vendor-login-email.email' => 'Please enter a valid email address.',
            'vendor-login-email.unique' => 'This email is already exsists!',
            'vendor-login-password' => 'Password is required!'
        ]);

        $matchData = [
            'vendor_login_id' => $getData['vendor-login-email'],
            'vendor_login_password' => $getData['vendor-login-password'],
        ];

        VendorLogin::create($matchData);
        return redirect()->route('vendor-login')->with('vendorloginsuccess', 'Login Successfully!');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect()->route('home')
            ->with('logout', 'Logout successfully!');
    }
}
