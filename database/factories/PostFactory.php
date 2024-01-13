<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name,
            'user_id' => 1,
            'slug' => fake()->slug(5),
            'content' => fake()->text,
            'excerpt' => fake()->paragraph(2),
            'status' => 'publish'
        ];
    }
}
