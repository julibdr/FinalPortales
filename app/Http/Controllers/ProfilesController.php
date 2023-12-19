<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateProfilesRequest;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('crear_profiles');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    public function store(CreateProfilesRequest $request)
    {
        $user = Auth::user();
        Profile::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'user_id' => $user->id,
        ]);

        return redirect('/articles')->with('success', 'Perfil creado exitosamente');
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
