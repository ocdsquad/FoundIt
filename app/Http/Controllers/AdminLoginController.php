<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.loginAdmin');
    }

    public function auth(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/home');
        }

        // dd($credentials);
        // return back()->with('loginError', 'Email/Password salah!');  
    }
}
