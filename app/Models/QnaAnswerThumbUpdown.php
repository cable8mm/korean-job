<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QnaAnswerThumbUpdown extends Model
{
    use HasFactory;

    protected $with = ['user'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function qnaAnswer(): BelongsTo
    {
        return $this->belongsTo(QnaAnswer::class);
    }
}
