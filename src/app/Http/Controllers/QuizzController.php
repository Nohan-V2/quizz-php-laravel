<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizz;

class QuizzController extends Controller
{
    public function index()
    {
        $quizzes = Quizz::query()->latest()->get();
        return view('quizz.index', ['quizzes' => $quizzes]);
    }
}
