<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        
        return view('registration');
    }
// Controller ini punya method index.
// Fungsinya mengembalikan tampilan (Blade file) bernama registration.blade.php.
// Jadi saat rute /Registration diakses, halaman resources/views/registration.blade.php yang ditampilkan.





}