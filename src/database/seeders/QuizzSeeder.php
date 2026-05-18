<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quizz;

class QuizzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $quizzes = [
            [
                'title' => 'HTML',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg',
            ],
            [
                'title' => 'CSS',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg',
            ],
            [
                'title' => 'JavaScript',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg',
            ],
            [
                'title' => 'ACCESSIBILITY',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/Accessibility_logo.svg',
            ],
        ];
        foreach ($quizzes as $quiz) {
            Quizz::create([
                'title' => $quiz['title'],
                'logo_url' => $quiz['logo_url'],
            ]);
        }
    }
}
