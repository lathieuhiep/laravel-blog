<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::middleware(['web'])->prefix('admin')->name('admin.')->group(function () {
    // login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

//    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('show-login-form');
//    Route::post('/login-admin', [AdminController::class, 'login'])->name('login');
//
//    Route::middleware(['admin'])->group(function (){
//        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//    });
});
