<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PhoneBookController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/', [ExampleController::class, 'index']);

Route::get('contact', [ExampleController::class, 'contact']);


// Route::get('phone-book', [PhoneBookController::class, 'index'])->name('phone-book.index');
// Route::post('phone-book', [PhoneBookController::class, 'store'])->name('phone-book.store');
// Route::get('phone-book/create', [PhoneBookController::class, 'create'])->name('phone-book.create');
// Route::get('phone-book/{phoneBook}/edit', [PhoneBookController::class, 'edit'])->name('phone-book.edit');
// Route::get('phone-book/{phoneBook}', [PhoneBookController::class, 'show'])->name('phone-book.show');
// Route::post('phone-book/{phoneBook}', [PhoneBookController::class, 'update'])->name('phone-book.update');
// Route::get('phone-book/{phoneBook}', [PhoneBookController::class, 'destroy'])->name('phone-book.destory');

Route::resource('phone-book', PhoneBookController::class);