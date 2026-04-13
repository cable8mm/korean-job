<?php

namespace Database\Factories;

use App\Models\QnaThumbUpdown;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<QnaThumbUpdown>
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
