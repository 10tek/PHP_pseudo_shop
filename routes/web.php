<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'verify' => true
]);

Route::get('/', [MainController::class, 'index'])
    ->name('main.index');

Route::get('/categories', [MainController::class, 'categories'])
    ->name('main.categories');

Route::get('/categories/{category}', [MainController::class, 'productsByCategory'])
    ->name('main.by-category');

Route::get('/products/{product}', [MainController::class, 'product'])->name('main.product');

