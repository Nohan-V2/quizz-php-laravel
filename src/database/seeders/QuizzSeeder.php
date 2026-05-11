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
        Quizz::create([
            'title' => 'Quizz de test',
            'logo_url' => 'https://via.placeholder.com/150',
        ]);
    }
}
