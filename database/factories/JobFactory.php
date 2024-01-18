<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $career_period_from = $career_period_to = null;

        if ($has_career_period = (rand(0, 1) === 1)) {
            $career_period_from = fake()->numberBetween(0, 3);
            $career_period_to = fake()->numberBetween(4, 7);
        }

        $salary_from = $salary_to = null;

        if ($has_salary = (rand(0, 1) === 1)) {
            $salary_from = fake()->numberBetween(40000, 70000);
            $salary_to = fake()->numberBetween(80000, 120000);
        }

        return [
            'user_id' => 1,
            'company_id' => 1,
            'title' => fake()->company(),
            'has_career_period' => $has_career_period,
            'career_period_from' => $career_period_from,
            'career_period_to' => $career_period_to,
            'has_salary' => $has_salary,
            'salary_from' => $salary_from,
            'salary_to' => $salary_to,
            'education' => 'Bachelor of Science in Computer Engineering',
            'working_area' => fake()->address(),
            'job_type' => fake()->randomElement(['Full-time', 'Part-time', 'Contract', 'Temporary']),
            'job_type_description' => fake()->randomElement(['Cook', 'Restaurant Serving', 'Programmer']),
            'description_type' => fake()->randomElement(['html', 'markdown', 'text']),
            'description' => fake()->sentence(),
            'apply_type' => fake()->randomElement(['Periodic', 'Frequent']),
            'opened_at' => fake()->dateTime(),
            'closed_at' => fake()->dateTime(),
            'how_to_apply' => fake()->randomElement(['email', 'website', 'this']),
        ];
    }
}
