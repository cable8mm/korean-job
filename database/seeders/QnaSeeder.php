<?php

namespace Database\Seeders;

use App\Models\Qna;
use App\Models\User;
use Illuminate\Database\Seeder;

class QnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id', 'id');

        Qna::factory()->state([
            'user_id' => $userIds->random(),
        ])->count(50)->create();
    }
}
