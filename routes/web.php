<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::prefix('product')->group(function () {
    Route::get('/',[ProductController::class, 'create'])->name('create');
    Route::post('/create',[ProductController::class, 'store'])->name('product-create');
});
