<?php

namespace Database\Seeders;

use App\Models\QnaAnswer;
use App\Models\QnaAnswerThumbUpdown;
use App\Models\User;
use Illuminate\Database\Seeder;

class QnaAnswerThumbUpdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id', 'id');
        $qnaAnswerIds = QnaAnswer::pluck('id', 'id');

        QnaAnswerThumbUpdown::factory()->state([
            'user_id' => $userIds->random(),
            'qna_answer_id' => $qnaAnswerIds->random(),
            'up_and_down' => fake()->randomElement([1, -1]),
        ])->count(50)->create();

        foreach ($qnaAnswerIds as $qnaAnswerId) {
            $thumbUp = QnaAnswerThumbUpdown::where('qna_answer_id', $qnaAnswerId)->where('up_and_down', '>', 0)->count();
            $thumbDown = QnaAnswerThumbUpdown::where('qna_answer_id', $qnaAnswerId)->where('up_and_down', '<', 0)->count();

            $qnaAnswer = QnaAnswer::find($qnaAnswerId);

            $qnaAnswer->thumb_up = $thumbUp;
            $qnaAnswer->thumb_down = $thumbDown;

            $qnaAnswer->save();
        }
    }
}
