<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validatedData=$request->validate([
            // 'name'=>'required|max:255',
            'username'=>['required','min:3','max:255', 'unique:users'],
            'email'=>'required|email:dns|unique:users',
            'password'=> 'required|min:5|:max:255'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Berhasil registrasi, silahkan login!');

        return redirect('/login')->with('success', 'Berhasil registrasi, silahkan login!');

    }
}
