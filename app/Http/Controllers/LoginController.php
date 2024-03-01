<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Login View
    public function index()
    {
        return view('login.index', [
            "title" => "Login",
            'profile' => AboutCompany::first()
        ]);
    }

    // Validasi User Login
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', "Login failed!!");
    }

    // Logout Sistem
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
