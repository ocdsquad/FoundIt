<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function auth(Request $request){
        $user = User::where('email', '=', $request->email)->get();

        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=> 'required'

        ]);


        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }
        // return back()->with('loginError', 'Email/Password salah!');      

        if($user[0] ->is_admin == false){
            if ($user[0]->is_verif){
                if(Auth::attempt($credentials)){
                    $request->session()->regenerate();
                    return redirect()->intended('/');
                }
                return back()->with('loginError', 'Email/Password salah!');
            }elseif ($user[0]->is_verif == false && $user[0]->is_tolak ==false){
                // return back()->with('alert','Halo');
                return "Akun anda belum terverifikasi";
                // return "<script>alert('Akun anda belum diverifikasi oleh admin.\nSilahkan tunggu admin untuk memverfikasi akun anda!!')</script>";
            }elseif ($user[0]->is_tolak){
                return "Mohon Maaf Akun Anda Tidak Lolos Verifikasi";
            }
        }
        return back()->with('loginError', 'Email/Password salah!');      
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    
}
