<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('login_admin');
    }


    public function loginAdmin(Request $request)
    {
        $user = User::where('email', $request->input('email'))
            ->where('role', 'editor')
            ->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            Auth::login($user);
            return redirect('/articles');
        } else {
            return view('login_admin')->withErrors(['email' => 'Correo electrónico o contraseña incorrectos.']);
        }
    
    }

}
