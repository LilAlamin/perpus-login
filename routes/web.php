<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

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

//Login 
$login = logincontroller::class;

Route::get('/login',[$login,'form_login']);
Route::get('/logout',[$login,'logout']);
Route::post('/login',[$login,'login']);

//user
$user = usercontroller::class;

Route::get('/bukuu',[$user,'list_buku']);
Route::get('/peminjaman',[$user,'list_peminjam']);
Route::post('/peminjaman',[$user,'tambah_pinjam']);
Route::get('/pengembalian',[$user,'list_kembali']);
Route::get('/pengembalian/hapus',[$user,'pengembalian']);

