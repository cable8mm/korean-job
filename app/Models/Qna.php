<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qna extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected $guarded = [];

    protected $casts = [
        'is_blind' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function qnaAnswers()
    {
        return $this->hasMany(QnaAnswer::class);
    }

    public function bestAnswer()
    {
        return $this->hasOne(QnaAnswer::class, 'id', 'best_qna_answer_id');
    }
}
