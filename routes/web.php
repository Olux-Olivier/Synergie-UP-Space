<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('index');
});

Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');
