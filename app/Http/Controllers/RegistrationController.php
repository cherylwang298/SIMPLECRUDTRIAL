<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        
        return view('registration');
    }

    public function check(){
        return view('thankyou');
    }
    
// Controller ini punya method index.
// Fungsinya mengembalikan tampilan (Blade file) bernama registration.blade.php.
// Jadi saat rute /Registration diakses, halaman resources/views/registration.blade.php yang ditampilkan.

    public function store(Request $request){

            $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|email|unique:registrations,email',
                'date_of_birth' => 'required|date',

            ]);


                Registration::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'date_of_birth' => $request->date_of_birth,
            ]);

                // return redirect()->back()->with('success', 'Registration successfull!');
                //return view('home'); //balik ke home langsung
                return view('thankyou');
            }




}