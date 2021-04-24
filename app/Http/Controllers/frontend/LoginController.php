<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\frontend_user;
use Hash;
class LoginController extends Controller
{
    public function signin()
    {
        return view('frontend.pages.signin');
    }

    public function Registration(Request $request)
    {
      $password = '';
      if($request->password == $request->con_password){
          $password = Hash::make($request->password);
      }else{
        return redirect()->route('signin')->with('error', 'password did not match');

      }

       $data = frontend_user::insert([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>$password,
           'email'=>$request->email,
        
       ]);
       return redirect()->route('login')->with('success', 'Successfully registration,Please Login Now!');
    }

    public function login()
    {
       return view('frontend.pages.login');
    }

    
    public function login_action(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
        //     return redirect()->intended(route('dashboard'));
        //  }

        if (Auth::attempt($credentials)) {
           return redirect()->intended(route('home'));
        }

        return redirect()->route('login');
    }
}
