<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth; 
use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;

class ShowEstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $user = auth()->user();
    $curso = $user->contratacion;
    
    return view('admin.show_estadisticas', ['user' => $user, 'curso' => $curso]);

    // if ($user) {
    //     // Obtén el perfil asociado al usuario
    //     $curso = $user->curso;

    //     // Pasa el perfil a la vista
    //     // return view('admin.show_estadisticas', ['user' => $user, 'curso' => $curso]);
    // }

   
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
