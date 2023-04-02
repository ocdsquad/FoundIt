<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home', [
            'barangs' => Barang::all()
        ]);
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
    public function store(Request $request)
    {   

        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:barangs',
            'deskripsi' => 'required|unique:barangs',
            'kronologi' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['category_id'] = 1;

        if($request["is_hilang"] == "1"){
            $validatedData['is_hilang'] = 1;
        } else {
            $validatedData['is_hilang'] = 0;
        }
        


        $validatedData['is_claim'] = 0;
        $validatedData['is_hadiah'] = 1;

        Barang::create($validatedData);

        return redirect('/')->with('success', 'Barang kamu berhasil ditambahkan!');
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
    public function update(Request $request, Barang $barang)
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