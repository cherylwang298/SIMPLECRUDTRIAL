<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('home');
});

Route::get('Registration', [RegistrationController::class, 'index'])->name('registration');
//fungsi index: kalau ditulis /Registration, akan panggil registration.blade.php]]
//->name('registration) itu nama alias biar bisa dipangg9l di file lain


Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');