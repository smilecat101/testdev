<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/login', [UserController::class, 'login'])
    ->name('login');

Route::post('/login', [UserController::class, 'authenticate'])
    ->name('login.authenticate');

Route::post('/logout', [UserController::class, 'logout'])
    ->name('logout');


Route::middleware('admin.auth')->group(function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])
        ->name('users.index');

    Route::get('/users/create', [UserController::class, 'create'])
        ->name('users.create');

    Route::post('/users', [UserController::class, 'store'])
        ->name('users.store');

    Route::get('/users/{user}/edit', [UserController::class, 'edit'])
        ->name('users.edit');

    Route::put('/users/{user}', [UserController::class, 'update'])
        ->name('users.update');

    Route::delete('/users/{user}', [UserController::class, 'destroy'])
        ->name('users.destroy');
});


Route::get('/', function () {
    return redirect()->route('dashboard');
});