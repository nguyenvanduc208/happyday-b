<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ResortController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FoodController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.layout.main');
    Route::prefix('/resort')->group(function () {
        Route::get('/', [ResortController::class, 'index'])->name('resort-list');
        Route::get('/add', [ResortController::class, 'create'])->name('resort-form-create');
        Route::post('/add', [ResortController::class, 'saveNew']);
        Route::get('remove/{id}', [ResortController::class, 'remove'])->name('resort-remove');
        Route::get('update/{id}', [ResortController::class, 'edit'])->name('resort-edit');
        Route::post('update/{id}', [ResortController::class, 'saveEdit']);
    });

    Route::prefix('/blog')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog-list');
        Route::get('/add', [BlogController::class, 'create'])->name('blog-form-create');
        Route::post('/add', [BlogController::class, 'saveNew']);
        Route::get('remove/{id}', [BlogController::class, 'remove'])->name('blog-remove');
        Route::get('update/{id}', [BlogController::class, 'edit'])->name('blog-edit');
        Route::post('update/{id}', [BlogController::class, 'saveEdit']);
    });


    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category-list');
        Route::get('/add', [CategoryController::class, 'create'])->name('category-form-create');
        Route::post('/add', [CategoryController::class, 'saveNew']);
        Route::get('remove/{id}', [CategoryController::class, 'remove'])->name('category-remove');
        Route::get('update/{id}', [CategoryController::class, 'edit'])->name('category-edit');
        Route::post('update/{id}', [CategoryController::class, 'saveEdit']);
    });

    Route::prefix('/food')->group(function () {
        Route::get('/', [FoodController::class, 'index'])->name('food-list');
        Route::get('/add', [FoodController::class, 'create'])->name('food-form-create');
        Route::post('/add', [FoodController::class, 'saveNew']);
        Route::get('remove/{id}', [FoodController::class, 'remove'])->name('food-remove');
        Route::get('update/{id}', [FoodController::class, 'edit'])->name('food-edit');
        Route::post('update/{id}', [FoodController::class, 'saveEdit']);
    });
});
