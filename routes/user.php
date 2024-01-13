<?php

use App\Http\Controllers\User\PostController;

Route::middleware(['web', 'user'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('posts', PostController::class);
});
