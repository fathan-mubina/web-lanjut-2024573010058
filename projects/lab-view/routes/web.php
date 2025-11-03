<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemonController;

Route::get('/hello', [DemonController::class, 'hello']);
Route::get('/greet/{name}', [DemonController::class, 'greet']);
Route::get('/search', [DemonController::class, 'search']);
Route::get('/', function () {
    return view('welcome');
});
