<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::query()->latest()->get();
        return view('responses.index', ['responses' => $answers]);
    }
}
