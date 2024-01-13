<?php

use App\Http\Controllers\Admin\AdminController;

Route::middleware('web')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('form-login-show');
    Route::post('/login', [AdminController::class, 'login'])->name('login');

    Route::middleware('admin')->group(function (){
        Route::middleware(['admin'])->group(function () {
//            Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        });
    });
});
