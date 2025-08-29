<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('home');
});

Route::get('Registration', [RegistrationController::class, 'index'])->name('registration');