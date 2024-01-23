<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id', 'id');
        $postIds = Post::pluck('id', 'id');

        PostComment::factory()->count(50)->create()->each(function ($postComment) use ($userIds, $postIds) {
            $postComment->update([
                'user_id' => $userIds->random(),
                'post_id' => $postIds->random(),
            ]);
        });
    }
}
