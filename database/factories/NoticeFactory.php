<?php

namespace Database\Factories;

use App\Models\Notice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Notice>
 */
class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_id' => 1,
            'title' => fake()->sentence(),
            'content' => fake()->text(),
            'is_top' => false,
            'is_html' => false,
            'displayed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
