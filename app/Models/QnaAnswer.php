<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QnaAnswer extends Model
{
    use HasFactory;

    protected $with = ['user'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function qna(): BelongsTo
    {
        return $this->belongsTo(Qna::class);
    }

    public function qnaAnswerThumbUpdowns(): HasMany
    {
        return $this->hasMany(QnaAnswerThumbUpdown::class);
    }
}
