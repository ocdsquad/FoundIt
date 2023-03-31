<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LibraryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/baranghilang', function () {
    return view('searchBarangHilang', [
        'barangs' => Barang::all()
    ]);
});

Route::get('/barangtemu', [PostController::class, 'index_temu']);

// Route::get('baranghilang/{slug}', function($slug){
//     return view('detailBarangHilang', [
//         "barang" => Barang::find($slug)
//     ]);
// });

Route::get('/baranghilang/{barang:slug}', [LibraryController::class, 'show_hilang']);
Route::get('/barangtemu/{barang:slug}', [LibraryController::class, 'show_temu']);