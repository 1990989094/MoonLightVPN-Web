<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return redirect()->route('index');
});


Route::group(["prefix" => "admin"], function () {
    Auth::routes();
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('/update-profile/{id}', [AdminController::class, 'updateProfile'])->name('update.profile');
    Route::post('/update', [AdminController::class, 'updateServer'])->name('update_server');
    Route::post('/update/switch', [AdminController::class, 'switch'])->name('switch_status');
    Route::post('/add', [AdminController::class, 'addServer'])->name('add_server');
    Route::post('/delete', [AdminController::class, 'deleteServer'])->name('delete_server');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('/setting', [SettingController::class, 'update'])->name('setting.update');
});
