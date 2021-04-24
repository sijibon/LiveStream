<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }

    public function login()
    {
      return view('backend.auth.login');
    }


    public function login_action(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
        //     return redirect()->intended(route('dashboard'));
        //  }

        if (Auth::attempt($credentials)) {
           return redirect()->intended(route('dashboard'));
        }

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::guard('frontend_user')->logout();
        return redirect()->route('login');
    }


}
