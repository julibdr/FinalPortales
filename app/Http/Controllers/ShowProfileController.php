<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProfilesController;
use App\Http\Requests\EditarProfileRequest;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ShowProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

public function index()
{
    $user = Auth::user();

    if ($user) {

        $profile = $user->profile;

        return view('admin.show_profile', ['profile' => $profile , 'user' => $user]);
    }
    return redirect('/login_admin');
    // $profiles = Profile::all();
    // return view('admin.show_profile', ['profiles' => $profiles]);
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        $user = Auth::user();
        return view('admin.editar_profile', ['profile' => $profile, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditarProfileRequest $request, $id)
    {
        $profile = Profile::find($id);
    
        if (!$profile) {
            return redirect('/registro_admin')->with('error', 'Perfil no encontrado');
        }
    
        $user = $profile->user;
    
        if (!$user) {
            return redirect('/registro_admin')->with('error', 'Usuario no encontrado');
        }
    
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
    
        $profile->update($data);
        $user->update($data);
    
        return redirect('profile')->with('success', 'Perfil actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
