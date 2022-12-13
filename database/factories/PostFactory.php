<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'content' => $this->faker->realText(50),
            'status' => $this->faker->randomElement(array('published', 'draft')),
            'pic' => $this->faker->imageUrl(640, 480),
            'sort' => rand(0, 20),
            'enabled' => $this->faker->randomElement([true, false]),
        ];

    }
}