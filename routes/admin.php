<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ResortController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::view('/','admin.layout.main');
    Route::prefix('/resort')->group(function () {
        Route::get('/',[ResortController::class,'index'])->name('resort-list');
        Route::get('/add',[ResortController::class,'create'])->name('resort-form-create');
        Route::post('/add',[ResortController::class,'insert']);
        Route::get('resort/remove/{id}', [ResortController::class, 'remove'])->name('remove.resort');
    Route::get('resort/update/{id}', [ResortController::class, 'edit'])->name('edit.resort');
    Route::post('resort/update/{id}', [ResortController::class, 'update']);
    });
});