<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;


class AuthArticlesController extends Controller
{
    public function crearArticulos()
    {
        return view('admin.crear_articulos');
    }

    public function editarArticulos()
    {
        return view('admin.editar_articulos');
    }

  public function index(Request $request)
{
   
}

}