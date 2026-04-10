<?php

namespace Database\Factories;

use App\Models\Qna;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Qna>
 */
class QnaFactory extends Factory
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
            'title' => fake()->sentence(),
            'question' => fake()->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
