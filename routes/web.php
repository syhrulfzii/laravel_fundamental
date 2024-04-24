<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

// Route::get('/', function () {
//     return view('welcome');
// });







Route::get('/amandemy-cafe', [ProdukController::class, 'index'])->name('produk.index');

require __DIR__.'/auth.php';
