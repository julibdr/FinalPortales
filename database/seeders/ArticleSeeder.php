<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;

class ArticleSeeder extends Seeder
{
   
    public function run(): void
    {
        Article::factory()->count(7)->create();
        $category = Article::factory()
            ->has(Category::factory()->count(7))
            ->create();

        // Crear 7 artículos
        // Article::factory()->count(7)->create()->each(function ($article) {
        //     // Asignar categorías existentes al azar a cada artículo
        //     $categories = Category::inRandomOrder()->limit(rand(1, 3))->get();
        //     $article->categories()->attach($categories);
        // });
    }
}
