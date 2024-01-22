<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QnaAnswer>
 */
class QnaAnswerFactory extends Factory
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
            'qna_id' => 1,
            'answer' => fake()->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
