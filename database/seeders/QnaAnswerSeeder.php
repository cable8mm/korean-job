<?php

namespace Database\Seeders;

use App\Models\Qna;
use App\Models\QnaAnswer;
use App\Models\User;
use Illuminate\Database\Seeder;

class QnaAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id', 'id');
        $qnaIds = Qna::pluck('id', 'id');

        QnaAnswer::factory()->state([
            'user_id' => $userIds->random(),
            'qna_id' => $qnaIds->random(),
        ])->count(50)->create();

        $qnas = Qna::all();

        foreach ($qnas as $qna) {
            $answer_count = QnaAnswer::where('qna_id', $qna->id)->count();

            $qna->answer_count = $answer_count;

            $qna->save();
        }
    }
}
