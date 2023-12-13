<?php

use App\Models\Akun;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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

// Home
Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

// Register & Login
Route::get('/auth', function () {
    return view('auth.auth');
})->name('login');

Route::post('/login/action', [
    AuthController::class, 'loginAction'
])->name('login.action');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register/action', [
    AuthController::class, 'registerAction'
])->name('register.action');

Route::get('/logout', [
    AuthController::class, 'logout'
])->name('logout');

// CRUD Admin


Route::middleware('auth')->group(function () {

    Route::get('/users/admin/account', function () {
        return view('users/admin.account', ["Akun" => Akun::all()]);
    })->name('admin.account');

    Route::get('/users/admin/product', function () {
        return view('users/admin.product', ["Produk" => Produk::all()]);
    })->name('admin.product');

    Route::get('users/admin/transaction', function () {
        return view('users/admin.transaction', ["Transaksi" => Transaksi::all()]);
    })->name('admin.transaction');

    Route::controller(ProdukController::class)->group(function () {
        Route::get('users/admin/product/add', 'add')->name('product.add');
        Route::post('users/admin/product/add/action', 'store')->name('product.store');
        Route::get('users/admin/product/edit/{id}', 'edit')->name('product.edit');
        Route::post('users/admin/product/{id}/action', 'update')->name('product.update');
        Route::post('users/admin/product/delete/{id}/action', 'delete')->name('product.delete');
        Route::get('users/admin/download_excel','download_excel')->name('download.excel');
    });
});
