<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

    Route::get('/dashboard', function () {
        return view('content.dashboard');
    })->name('dashboard');

    Route::get('/data-penjualan', function () {
        return view('content.datapenjualan');
    })->name('data-penjualan');

    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/data-produk', [ProdukController::class, 'index'])->name('data-produk');

