<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/v1')->name('v1.')->group(function () {
    Route::prefix('/products')->name('products.')->group(function () {
        Route::get('/', [Controllers\Api\V1\Products\ProductController::class, 'index'])->name('index');
        Route::get('/find/{id}', [Controllers\Api\V1\Products\ProductController::class, 'find'])->name('find');
        Route::post('/create/{id?}', [Controllers\Api\V1\Products\ProductController::class, 'create'])->name('create');
        Route::get('/categories', [Controllers\Api\V1\Products\ProductCategoryController::class, 'index']);
    });
});
