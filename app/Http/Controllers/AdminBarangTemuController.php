<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBarangTemuController extends Controller
{
    public function delete(string $id)
    {
        $data = Barang::find($id);
        $data->delete();
   
        return redirect('/admin/barangtemu')->with('success', 'Barang berhasil dihapus');
    }
}
