<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::view('/','admin.layout.main');
    Route::prefix('/resort')->group(function () {
        Route::view('','admin.resort.list')->name('resort-list');
        Route::view('add','admin.resort.add-new')->name('resort-add');
    });
});