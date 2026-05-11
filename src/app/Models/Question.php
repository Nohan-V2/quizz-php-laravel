<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = ['question', 'answer'];

    public function quizzes(): BelongsToMany
    {
        return $this->belongsToMany(Quizz::class, 'quizz_question')
            ->withPivot('score')
            ->withTimestamps();
    }
}
