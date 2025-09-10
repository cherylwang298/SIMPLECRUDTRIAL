<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('Registration', [RegistrationController::class, 'index'])->name('registration');
//fungsi index: kalau ditulis /Registration, akan panggil registration.blade.php]]
//->name('registration) itu nama alias biar bisa dipangg9l di file lain


Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');

Route::get('/register', function () {
    return redirect()->route('registration'); // lempar balik ke halaman form
});

Route::get('/thankyou', [RegistrationController::class, 'check']);


Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', function () {
    if (!session('user_id')) {
        return redirect('/login');
    }
    return view('dashboard');
});