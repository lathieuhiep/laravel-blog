<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware(['web'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login']);

    Route::middleware(['admin'])->group(function (){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
});