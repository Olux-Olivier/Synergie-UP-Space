<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RealisationController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

    Route::middleware('admin.auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('/messages', [MessageController::class, 'index'])->name('admin.messages.index');
        Route::patch('/messages/{message}/toggle-read', [MessageController::class, 'toggleRead'])->name('admin.messages.toggle-read');
        Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('admin.messages.destroy');
        Route::get('/realisations', [RealisationController::class, 'index'])->name('admin.realisations.index');
        Route::post('/realisations', [RealisationController::class, 'store'])->name('admin.realisations.store');
        Route::patch('/realisations/{realisation}', [RealisationController::class, 'update'])->name('admin.realisations.update');
        Route::delete('/realisations/{realisation}', [RealisationController::class, 'destroy'])->name('admin.realisations.destroy');
    });
});
