<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public function show_hilang(Barang $barang){
        return view('detailBarangHilang', [
            "barang" => $barang
        ]);
    }

    public function show_temu(Barang $barang){
        return view('detailBarangTemuan', [
            "barang" => $barang
        ]);
    }

    public function home(Request $request){

        $barang = Barang::latest()->get();
        $barang->when($request->search, function($q) use ($request){
            return $q->where('nama', 'like','%'.$request->search.'%');
        });
        

        return view('home', [
            'barangs' => $barang
        ]);
    }
}
