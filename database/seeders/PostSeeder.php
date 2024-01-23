<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id', 'id');

        Post::factory()->count(50)->create()->each(function ($post) use ($userIds) {
            $post->update([
                'user_id' => $userIds->random(),
            ]);
        });
    }
}
