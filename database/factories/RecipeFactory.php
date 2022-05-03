<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Recipe::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $recipe_name = $this->faker->words($nb=4, $asText = true);
        $slug = Str::slug($recipe_name );
        return [
            'name' => $recipe_name,
            'slug' => $slug,
            'image' => 'recipe-' . $this->faker->unique()->numberBetween(1,8).'.jpg',
            'ingredients' => $this->faker->text(150),
            'method' => $this->faker->text(500)
        ];
    }
}
