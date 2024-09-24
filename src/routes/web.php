<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Livewire\ContactBook;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.main');
})->name('main');

Route::get('/search', function () {
    return view('page.search');
})->name('search');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('/contacts', [UserController::class, 'contacts'])->name('contacts');
Route::get('/contacts/{contact}', [ContactController::class, 'contact'])->name('contact');
Route::get('/contact/form', [ContactController::class, 'contactFormShow'])->name('contact-form-show');
Route::post('/contact/form', [ContactController::class, 'contactFormCreate'])->name('contact-form-create');

require __DIR__.'/auth.php';
