<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Job;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobIds = Job::pluck('id', 'id');

        Banner::factory()->count(50)->create()->each(function ($banner) use ($jobIds) {
            $banner->update([
                'link_url' => route('job.show', $jobIds->random()),
                'image' => '/assets/seeds/image-'.rand(1, 3).'.jpg',
            ]);
        });
    }
}
