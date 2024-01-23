<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            JobSeeder::class,
            NoticeSeeder::class,
            QnaSeeder::class,
            QnaAnswerSeeder::class,
            QnaAnswerThumbUpdownSeeder::class,
            PostSeeder::class,
            PostCommentSeeder::class,
        ]);
    }
}
