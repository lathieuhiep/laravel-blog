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
        $remember = $request->has('remember');

        if ( Auth::attempt($credentials, $remember) ) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.show-login-form')->with('message', 'Email hoặc mật khẩu không đúng');
    }
}
