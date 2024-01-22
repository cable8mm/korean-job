<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QnaAnswerThumbUpdown extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function qnaAnswer()
    {
        return $this->belongsTo(QnaAnswer::class);
    }
}
