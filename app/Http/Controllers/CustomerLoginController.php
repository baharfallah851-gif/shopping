<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerLoginController extends Controller
{
    // فرم ورود
    public function showLoginForm()
    {
        return view('login');
    }

    // متد login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {
            Auth::guard('web')->logout(); // جلوگیری از همزمان بودن دو login
            $request->session()->regenerate();

            return redirect()->route('customer.index');
        }

        return back()->withErrors([
            'username' => 'The username or password is incorrect.',
        ])->withInput();
    }

    // logout
    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('logout');
    }
}
