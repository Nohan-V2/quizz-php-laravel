<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'question' => 'Qu\'est ce que HTML ?',
                'quizz_id' => 1,
            ],
            [
                'question' => 'Qu\'est ce que HTML ?',
                'quizz_id' => 1,
            ],
            [
                'question' => 'Qu\'est ce que HTML ?',
                'quizz_id' => 1,
            ],
            [
                'question' => 'Qu\'est ce que CSS ?',
                'quizz_id' => 2,
            ],
            [
                'question' => 'Qu\'est ce que JavaScript ?',
                'quizz_id' => 3,
            ],
            [
                'question' => 'Qu\'est ce que l\'ACCESSIBILITY ?',
                'quizz_id' => 4,
            ],
        ];
        foreach ($questions as $question) {
            Question::create([
                'question' => $question['question'],
                'quizz_id' => $question['quizz_id'],
            ]);
        }
    }
}
