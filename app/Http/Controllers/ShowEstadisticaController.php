<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth; 
use App\Models\Curso;
use App\Models\User;
use App\Models\Contratacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShowEstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $contrataciones = Contratacion::all();
    $estadisticasPorDia = $this->obtenerEstadisticasUsuariosContratacionesPorDia();
// return $contrataciones;

     if(auth()->user()->role == 'admin'){
    return view('admin.show_estadisticas', compact('estadisticasPorDia', 'contrataciones'));
        }else{
            return redirect('/login_admin');
        }
}


public function obtenerEstadisticasUsuariosContratacionesPorDia()
{
    $estadisticasPorDia = User::with(['cursosContratados:id,title,content,price,created_at'])
        ->select(DB::raw('DATE(created_at) as fecha_registro'), DB::raw('COUNT(*) as total_usuarios'))
        ->groupBy('fecha_registro')
        ->orderBy('fecha_registro')
        ->get();

    return $estadisticasPorDia;
}


public function confirmar()
{
    $cursoId = request()->input('curso_id');
    $user = Auth::user();
    $curso = Curso::find($cursoId);

    $contratacion = Contratacion::create([
        'curso_id' =>  $cursoId,
        'user_id' => $user->id,
        
    ]);

    return view('confirmacion', ['user' => $user, 'curso' => $curso]);
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
