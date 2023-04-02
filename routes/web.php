<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        'barangs' => Barang::all()
    ]);
});

Route::get('/admin', function () {
    return view('admin/halmBarangHilang');
});


Route::get('/baranghilang', [BarangController::class,'index']);




Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'auth']);
Route::post('/logout',[LoginController::class,'logout']);


Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);


Route::get('/barangtemu', [PostController::class, 'index_temu']);

// Route::get('baranghilang/{slug}', function($slug){
//     return view('detailBarangHilang', [
//         "barang" => Barang::find($slug)
//     ]);
// });

Route::get('/baranghilang/{barang:slug}', [LibraryController::class, 'show_hilang']);
Route::get('/barangtemu/{barang:slug}', [LibraryController::class, 'show_temu']);

Route::resource('/Laporan', LaporanController::class);

