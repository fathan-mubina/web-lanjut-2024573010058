<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
route::post('/product/result', [ProductController::class, 'result'])->name('product.result');
