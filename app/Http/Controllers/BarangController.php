<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('home');
        // $barang = Barang::latest()->where('is_hilang',true);

        // if(request('search')){
        //     $barang->where('nama', 'like','%'. request('search') . '%');
        // }

        // return view('searchBarangHilang', [
        //     'barangs' => $barang->paginate(5)->withQueryString()
        
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarangRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'unique',
            'deskripsi' => 'required|unique:posts',
            'kronologi' => 'required',
            'lokasi' => 'required',
        ]);

        $validatedData['user_id'] = 1;
        $validatedData['category_id'] = 1;
        $validatedData['is_hilang'] = 1;
        $validatedData['is_claim'] = 1;
        $validatedData['is_hadiah'] = 1;

        Barang::create($validatedData);

        return redirect('/Laporan');


    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangRequest $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
