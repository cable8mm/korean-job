<?php

namespace Database\Factories;

use App\Enums\JobType;
use App\Enums\TextareaType;
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
        $salary_from = $salary_to = null;

        if ($has_salary = (rand(0, 1) === 1)) {
            $salary_from = fake()->numberBetween(40000, 70000);
            $salary_to = fake()->numberBetween(80000, 120000);
        }

        return [
            'user_id' => 1,
            'company_id' => 1,
            'title' => fake()->sentence(),
            'job_type' => fake()->randomElement(JobType::kCases()),
            'job_position' => 'Restaurant Manager',
            'job_requirement_certification' => 'Bachelor of Science in Computer Engineering',
            'job_experience_period' => fake()->numberBetween(0, 20),
            'work_hours' => '8am to 5pm, Monday to Friday',
            'working_area' => fake()->address(),
            'wages_and_benefits' => fake()->paragraph(2),
            'application_process' => 'Please send a resume and completed employment application to the HR manager at abc@abc.com',
            'has_salary' => $has_salary,
            'salary_from' => $salary_from,
            'salary_to' => $salary_to,
            'job_required' => 'Demonstrated compoter skills in MS Office, including Word, Excel and Outlook are a plus.',
            'job_preferred' => 'CAs or CPAs is, preferred, but not required.',
            'number_of_potisions' => fake()->numberBetween(0, 20),
            'description_type' => fake()->randomElement(TextareaType::kCases()),
            'description' => fake()->text(),
            'contact' => fake()->phoneNumber().' to '.fake()->name(),
            'opened_at' => now(),
            'closed_at' => now()->addDays(fake()->numberBetween(0, 200)),
        ];
    }
}
