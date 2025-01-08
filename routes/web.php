<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list-products', [ProductController::class, 'showListProduct'])->name('products.list');
