<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QnaAnswer extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function qna()
    {
        return $this->belongsTo(Qna::class);
    }

    public function qnaThumbUpdowns()
    {
        return $this->hasMany(QnaAnswerThumbUpdown::class);
    }
}
