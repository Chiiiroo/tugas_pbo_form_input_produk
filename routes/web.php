<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Ini route agar saat buka http://127.0.0.1:8000,
// otomatis pindah ke halaman products
Route::get('/', function () {
    return redirect('/products');
});

// Ini route untuk CRUD produk Anda
Route::resource('products', ProductController::class);
