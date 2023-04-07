<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDataUserController extends Controller
{
    public function delete(string $id)
    {
        $data = User::find($id);
        $data->delete();
   
        return redirect('/admin/datauser')->with('success', 'Barang berhasil dihapus');
    }
}
