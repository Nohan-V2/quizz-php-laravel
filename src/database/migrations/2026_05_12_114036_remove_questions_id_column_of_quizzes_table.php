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
        if (! Schema::hasColumn('quizzes', 'question_id')) {
            return;
        }

        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropColumn('question_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('quizzes', 'question_id')) {
            return;
        }

        Schema::table('quizzes', function (Blueprint $table) {
            $table->foreignId('question_id')->constrained('questions')->onCascadeOnDelete();
        });
    }
};
