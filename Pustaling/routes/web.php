<?php

use Illuminate\Support\Facades\Route;

// menggunakan PustalingController
use App\Http\Controllers\PustalingController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\EditController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/index', PustalingController::class);

Route::get('/buku',[BookController::class, 'index']) -> name('dataBuku');
Route::get('/buku{book}',[BookController::class, 'destroy']) -> name('deleteBuku');
Route::post('/buku',[BookController::class, 'store']);


Route::get('/edit{book}',[EditController::class, 'index']) -> name('edit');
// Route::post('/edit',[EditController::class, 'index']);

// Route::get('edit/{book}', function ($id) {
//     return $id;
// });

Route::get('/pinjam', function () {
    return view('pustaling.pinjam');
});

Route::get('/tambah', function () {
    return view('pustaling.tambah');
});

Route::get('/about', function () {
    return view('pustaling.about');
});

Route::get('/login',[LoginController::class, 'index']) -> name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/daftar',[DaftarController::class, 'index']) -> name('daftar');
Route::post('/daftar', [DaftarController::class, 'store']);