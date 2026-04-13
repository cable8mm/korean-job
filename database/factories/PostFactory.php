<?php

namespace Database\Factories;

use App\Enums\PostBranchEnum;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
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
            'user_id' => 1,
            'branch' => PostBranchEnum::kDefault(),
            'title' => fake()->sentence(),
            'content' => fake()->text(),
            'content_format' => 'text',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
