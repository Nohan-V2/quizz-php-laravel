<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quizz extends Model
{
    use HasFactory;

    protected $table = 'quizzes';

    protected $fillable = ['title', 'logo_url'];

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'quizz_user')
            ->withPivot('score')
            ->withTimestamps();
    }
}
