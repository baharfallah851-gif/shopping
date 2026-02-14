<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_form(){
        if (Auth::check()) {
            return redirect('home');
        }
        return view('login');
    }

    public function login(Request $request)
    {
//        if (Auth::attempt([
//            'username' => $request->get('username'),
//            'password' => $request->get('password')
//        ])) {
//            $request->session()->regenerate();
//`
//            return redirect()->intended('home');
//        }


        $credentials = $request->only('username', 'password');                 //for remember me
        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'username' => 'The username or password is incorrect.',
        ])->withInput();


//        return redirect(route('login.form'));
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

}
