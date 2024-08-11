<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response(204);
});

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/profile/{id}', [UserController::class, 'editProfile'])->name('users.edit-profile');
    Route::post('/update-profile/{id}', [UserController::class, 'updateProfile'])->name('users.update-profile');

    Route::resource('teams', TeamController::class);

});

Auth::routes(['register' => true]);