<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizz;

class QuizzController extends Controller
{
    public function index()
    {
        $quizzes = Quizz::query()->latest()->get();
        return view('quizzes.index', ['quizzes' => $quizzes]);
    }

    public function showOneQuizz($quizz_id, $question_id)
    {
        $quizz = Quizz::query()->with('questions.answers')->findOrFail($quizz_id);
        return view('quizzes.show', ['quizz' => $quizz]);
    }
}
