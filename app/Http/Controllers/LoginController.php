<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;


class LoginController extends Controller{

    public function index(){
        return view('login');
    }


     public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $user = Registration::where('name', $request->name)
                            ->where('email', $request->email)
                            ->first();

        if ($user) {
            // Simpan user_id ke session
            session(['user_id' => $user->id]);

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'login' => 'Nama atau email salah.',
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        return redirect('/login');
    }

}