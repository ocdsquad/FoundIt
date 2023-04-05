<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Barang;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_temu()
    {

        $barang = Barang::where('is_hilang', false);

        if(request('search')){
            $barang->where('nama', 'like','%'. request('search'). '%');
            
        }
        return view('searchBarangTemuan', [
            'barangs' => $barang->paginate(7)->withQueryString()
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
