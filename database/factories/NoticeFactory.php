<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notice>
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
