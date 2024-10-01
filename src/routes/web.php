<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Livewire\ContactBook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.main', [
        'user' => auth()->check()
    ]);
})->name('main');


Route::get('/dashboard', function () {
return redirect()->route('contacts');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/search', function () {
        return view('page.search', [
            'user' => auth()->user()
        ]);
    })->name('search');
    Route::get('/contacts', [UserController::class, 'contacts'])->name('contacts');
    Route::get('/contacts/{contact}', [ContactController::class, 'contact'])->name('contact');


    Route::post('/contact/delete{contact}', [ContactController::class, 'contactDelete'])->name('contact-delete');


    Route::post('/contact/edit/{contact}', [ContactController::class, 'contactEdit'])->name('contact-edit');
    Route::get('/contact/{contact}', [ContactController::class, 'contactEditShow'])->name('contact-edit-show');





    Route::get('/contact/form', [ContactController::class, 'contactFormShow'])->name('contact-form-show');

    Route::post('/contact/form', [ContactController::class, 'contactFormCreate'])->name('contact-form-create');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login'); // Перенаправление на главную страницу или другую страницу
    })->name('logout');
});


require __DIR__ . '/auth.php';
