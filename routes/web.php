<?php

use App\Models\User;
use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminDataUserController;
use App\Http\Controllers\AdminBarangTemuController;
use App\Http\Controllers\AdminBarangHilangController;

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

Route::get('/', [LibraryController::class,'home']);

// Route::get('/', [LibraryController::class,'home']);
Route::get('/baranghilang', [BarangController::class,'index']);
Route::get('/barangtemu', [PostController::class, 'index_temu']);



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
Route::get('/Laporan/create/checkSlug', [LaporanController::class, 'checkSlug']);

// Admin


Route::get('/admin/datauser', function () {
    return view('admin.halmDataUser',[
        'users' => User::all()
    ]);
});

Route::get('/admin/home', [AdminHomeController::class, 'index']);



Route::get('/admin/baranghilang', function () {
    return view('admin.halmBarangHilang',[
        'barangs' => Barang::all()
    ]);
});

Route::get('/admin/barangtemu', function () {
    return view('admin.halmBarangTemu',[
        'barangs' => Barang::all()
    ]);
});

//route verifikasi
Route::post('/admin/verif/{user:id}', [AdminHomeController::class, 'verif']);
Route::post('/admin/tolak/{user:id}', [AdminHomeController::class, 'tolak']);

Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::post('/admin/login', [AdminLoginController::class, 'auth']);

Route::get('/admin/barang-hilang/{barang:id}/edit', [AdminBarangHilangController::class, 'edit'])-> name('edit');
Route::delete('/admin/barang-hilang/{barang:id}', [AdminBarangHilangController::class, 'delete'])-> name('delete');
Route::delete('/admin/barang-temu/{barang:id}', [AdminBarangTemuController::class, 'delete'])-> name('delete');
Route::delete('/admin/datauser/{user:id}', [AdminDataUserController::class, 'delete'])-> name('delete');
