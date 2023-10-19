<?php

use App\Models\Akun;
use App\Models\Produk;
use App\Models\Transaksi;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/auth', function () {
    return view('auth.auth');
})->name('login');
Route::get('users/admin/account', function () {
    return view('users/admin.account',["Akun"=>Akun::all()]);
})->name('admin.account');
Route::get('users/admin/product', function () {
    return view('users/admin.product',["Produk"=>Produk::all()]);
})->name('admin.product');
Route::get('users/admin/transaction', function () {
    return view('users/admin.transaction',["Transaksi"=>Transaksi::all()]);
})->name('admin.transaction');
