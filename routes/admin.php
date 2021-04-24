<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;

Route::group(['middleware'=>'auth'], function(){

    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    
});

Route::get('/login',[AdminController::class, 'login'])->name('login');

Route::post('/login-action', [AdminController::class, 'login_action'])->name('login-action');