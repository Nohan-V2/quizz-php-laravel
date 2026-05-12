<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('quizz_user')) {
            return;
        }

        Schema::create('quizz_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onCascadeOnDelete();
            $table->foreignId('quizz_id')->constrained('quizzes')->onCascadeOnDelete();
            $table->unique(['user_id', 'quizz_id']);
            $table->integer('score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizz_user');
    }
};
