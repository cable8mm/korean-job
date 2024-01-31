<?php

namespace Database\Factories;

use App\Enums\BannerLinkTypeEnum;
use App\Enums\BannerThemeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
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
            'tags' => Arr::join(fake()->randomElements(fake()->words(), null), ',') ?? null,
            'title' => fake()->sentence(),
            'color_theme' => fake()->randomElement(BannerThemeEnum::kCases()),
            'content' => fake()->paragraph(2),
            'link_url' => fake()->url(),
            'link_type' => fake()->randomElement(BannerLinkTypeEnum::kCases()),
            'opened_at' => now(),
            'closed_at' => now()->addMonth(1),
            'is_active' => fake()->randomElement([true, false]),
        ];
    }
}
