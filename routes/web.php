<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/login');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

    // DASHBOARD REDIRECT
    Route::get('/dashboard', function () {
        return Auth::user()->role === 'admin'
            ? redirect()->route('admin.dashboard')
            : redirect()->route('user.dashboard');
    })->name('dashboard');


    // ADMIN ONLY
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/secret', [AdminController::class, 'secret'])->name('admin.secret');
    });


    // USER + ADMIN
    Route::middleware('role:user,admin')->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
    });

});
