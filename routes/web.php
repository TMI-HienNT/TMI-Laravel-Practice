<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('posts', PostController::class)->only(['index', 'show']);
//Route::resource('posts', PostController::class)->except(['create', 'edit']);

//Route::resource('posts.comments', CommentController::class);

Route::get('list-products', [ProductController::class, 'showListProduct'])->name('products.list');

Route::resource('brands', BrandController::class);


