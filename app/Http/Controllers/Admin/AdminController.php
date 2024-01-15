<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('admin.login');
    }

    //
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with('error', 'Email hoặc mật khẩu không đúng');
        }

        return redirect()->route('admin.show-login-form')->with('message', 'Email hoặc mật khẩu không đúng');
    }
}
