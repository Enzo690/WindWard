<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'author_id' => 2,
        ];
    }
}
