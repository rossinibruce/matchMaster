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

    Route::resource('users', UserController::class);
    Route::resource('teams', TeamController::class);
    Route::get('/search-teams', [TeamController::class, 'searchTeams'])->name('teams.search-teams');
    Route::post('/entry-request/{id}', [TeamController::class, 'entryRequest'])->name('teams.entry-request');

});

Auth::routes(['register' => true]);