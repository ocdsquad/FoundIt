<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function index(){
        return view('admin.homeAdmin',[
            'users' => User::all()
        ]);
    }
    
    public function verif($id){
        $data = User::find($id);
        $data->is_verif = true;
        $data->save();
        return redirect('/admin/home')->with('success', 'Berhasil Verifikasi Akun User');
        // return "<script>
        // alert('Berhasil Verifikasi Akun User');
        // location.href='/admin/home';
        // </script>"
    }

    public function tolak($id){
        $data = User::find($id);
        $data->is_tolak = true;
        $data->save();
        return redirect('/admin/home')->with('success', 'Berhasil Verifikasi Akun User');
        // return "<script>
        // alert('Berhasil Verifikasi Akun User');
        // location.href='/admin/home';
        // </script>"
    }
}
