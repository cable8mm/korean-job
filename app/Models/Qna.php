<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Qna extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected $guarded = [];

    protected $casts = [
        'is_blind' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function qnaAnswers(): HasMany
    {
        return $this->hasMany(QnaAnswer::class);
    }

    public function bestAnswer(): HasOne
    {
        return $this->hasOne(QnaAnswer::class, 'id', 'best_qna_answer_id');
    }
}
