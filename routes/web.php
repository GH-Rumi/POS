<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::prefix('category')->group(function () {

    Route::get('/food-beverage', [ProductController::class, 'food']);
    Route::get('/beauty-health', [ProductController::class, 'beauty']);
    Route::get('/home-care', [ProductController::class, 'homecare']);
    Route::get('/baby-kid', [ProductController::class, 'baby']);

});
Route::get('/', [HomeController::class, 'index']);
