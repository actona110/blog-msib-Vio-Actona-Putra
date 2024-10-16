<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        return view('profile.show', compact('user'));
    }
}
