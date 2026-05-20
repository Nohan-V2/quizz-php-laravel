<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\UserController;

Route::get("/", [QuizzController::class, 'index']);
Route::get("/quizzes", [QuizzController::class, 'index'])->name('quizzes');
Route::get("/quizzes/{quizz_id}/questions/{question_id}", [QuizzController::class, 'showOneQuizz'])->name('quizzes.show');
Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::get("/signup", [AuthController::class, 'signup'])->name('signup');
Route::get("/logout", [AuthController::class, 'logout'])->name('logout');
