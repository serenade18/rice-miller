<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $blog_title = $this->faker->words($nb=6, $asText = true);
        $slug = Str::slug($blog_title);
        return [
            'title' => $blog_title,
            'slug' => $slug,
            'image' => 'blog-' . $this->faker->unique()->numberBetween(1,5).'.jpg',
            'byline' => $this->faker->text(200),
            'article' => $this->faker->text(500)
        ];
    }
}
