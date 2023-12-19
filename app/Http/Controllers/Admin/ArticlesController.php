<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Article;
use App\Models\Category; 
use Illuminate\Support\Facades\Validator; 
use App\Http\Requests\EditarArticulosRequest;
use App\Http\Requests\CreateArticlesRequest;



class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

            $articulos = Article::all();
            $categories = Category::all();
            return view('admin.abm_articles', compact('articulos', 'categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
  
     public function create(Request $request) 
     {
       
     }
 
   
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateArticlesRequest $request)
    {
        $user = Auth::user();

        $article = Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),   
            'profile_id' => $user->profile->id,
        ]);
    
   
        $categoryName = $request->input('category');
        if (!empty($categoryName)) {
         
            $category = Category::firstOrCreate(['name' => $categoryName]);
    
           
            $article->categories()->attach($category->id);
        }
    
        $article->save();
    

        return redirect('/articles')->with('success', 'Artículo creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'hola';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        
        return view('admin.editar_articulos', ['article' => $article]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(EditarArticulosRequest $request, $id)
    {
      
        $article = Article::find($id);
    
        if (!$article) {
            return redirect('/articles')->with('error', 'Artículo no encontrado');
        }
    
        $data = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ];
    
        $article->update($data);
     
        return redirect('/articles')->with('success', 'Artículo actualizado exitosamente');
    }
    
   
        public function destroy(Article $article)
        {
            if ($article) {
                $article->categories()->detach();
    
                $article->delete();
            }
            return redirect('/articles')->with('danger', 'Artículo eliminado exitosamente');
        }
}
