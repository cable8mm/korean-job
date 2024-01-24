<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QnaThumbUpdown>
 */
class QnaAnswerThumbUpdownFactory extends Factory
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
            'qna_answer_id' => 1,
            'up_and_down' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
