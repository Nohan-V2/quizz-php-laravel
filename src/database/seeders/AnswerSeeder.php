<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            [
                'answer' => 'Le HTML sert à créer la structure de la page web.',
                'is_correct' => true,
                'question_id' => 1,
            ],
            [
                'answer' => 'Le HTML est un langage qui gère les animations de la page web.',
                'is_correct' => false,
                'question_id' => 1,
            ],
            [
                'answer' => 'Le HTML est un langage de style utilisé pour la mise en page de la page web.',
                'is_correct' => false,
                'question_id' => 1,
            ],
            [
                'answer' => 'Le HTML est un langage de programmation.',
                'is_correct' => false,
                'question_id' => 1,
            ],
            [
                'answer' => 'CSS permet de styliser la page web.',
                'is_correct' => true,
                'question_id' => 2,
            ],
            [
                'answer' => 'CSS permet de créer le squelette de la page web.',
                'is_correct' => false,
                'question_id' => 2,
            ],
            [
                'answer' => 'CSS est un langage logique.',
                'is_correct' => false,
                'question_id' => 2,
            ],
            [
                'answer' => 'CSS est un langage de programmation.',
                'is_correct' => false,
                'question_id' => 2,
            ],
            [
                'answer' => 'Javascript est un langage de programmation.',
                'is_correct' => true,
                'question_id' => 3,
            ],
            [
                'answer' => 'Javascript sert a styliser une page web.',
                'is_correct' => false,
                'question_id' => 3,
            ],
            [
                'answer' => 'Javascript est asynchrone.',
                'is_correct' => false,
                'question_id' => 3,
            ],
            [
                'answer' => 'Javascript est nul.',
                'is_correct' => false,
                'question_id' => 3,
            ],
        ];
        foreach ($answers as $answer) {
            Answer::create($answer);
        }
    }
}
