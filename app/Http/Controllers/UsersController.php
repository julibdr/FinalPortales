<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateUser;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registro_admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    public function store(CreateUser $request)
    {

        $user = User::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'editor',
        ]);

        Auth::login($user); 
        return redirect()->route('crear_profiles.store', ['user' => $user->id])
        ->with('success', 'Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
