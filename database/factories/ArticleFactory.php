<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subject' => $this->faker->realText(20),
            'content' => $this->faker->realText(50),
            'cgy_id' => rand(0, 20),
            'enabled_at' => Carbon::createFromFormat('Y-m-d', $this->faker->date),
            'enabled' => $this->faker->randomElement([true, false]),

        ];
    }
}