<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware(['web'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('show-login-form');
    Route::post('/login-admin', [AdminController::class, 'login'])->name('login');

    Route::middleware(['admin'])->group(function (){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
});
