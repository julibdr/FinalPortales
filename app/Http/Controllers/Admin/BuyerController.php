<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth; 
use App\Models\Curso; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CursoRequest;


class BuyerController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('admin.buyer', compact('cursos'));
    // return view('admin.buyer', ['cursos'=>$curso]);
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
    public function store(CursoRequest $request)
    {
        $user = Auth::user();

        $curso = Curso::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),   
            'price' => $request->input('price'),  
        ]);
        $curso->save();
    

        return redirect('/buyer')->with('success', 'Curso creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //tiene que ver todos los usuarios con los servicios contratados
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {

        return view('admin.editar_cursos', ['curso' => $curso]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CursoRequest $request, $id)
    {
        $curso = Curso::find($id);
    
        if (!$curso) {
            return redirect('/buyer')->with('error', 'Curso no encontrado');
        }
    
        $data = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'price' => $request->input('price'),  
        ];
    
        $curso->update($data);
     
        return redirect('/buyer')->with('success', 'Curso actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        if ($curso) {

            $curso->delete();
        }
        return redirect('/buyer')->with('danger', 'Curso eliminado exitosamente');
    }
}
