<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function show_hilang($id){
        return view('detailBarangHilang', [
            "barang" => Barang::find($id)
        ]);
    }

    public function show_temu($slug){
        return view('detailBarangTemuan', [
            "barang" => Barang::find($slug)
        ]);
    }
}
