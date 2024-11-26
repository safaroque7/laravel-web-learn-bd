<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PhoneBookController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/', [ExampleController::class, 'index']);

Route::get('contact', [ExampleController::class, 'contact']);

// Route::get('/phone-book/create', [PhoneBookController::class, 'create']);
Route::post('/phone-book', [PhoneBookController::class, 'index'])->name('phone-book.index');
Route::post('/phone-book/store', [PhoneBookController::class, 'store'])->name('phone-book.store');
