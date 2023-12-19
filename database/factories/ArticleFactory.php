<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Article; 
use App\Models\Profile;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titleLenght = 250;
        return [
            'title' => $this->faker->text($titleLenght),
            'content' => $this->faker->paragraph,
            'profile_id' => Profile::factory()->create()->id,
        ];
    }
}
