<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResponseController;

Route::get("/", [QuizzController::class, 'index']);
Route::get("/quizzes", [QuizzController::class, 'index'])->name('quizzes');
Route::get("/quizzes/{id}", [QuizzController::class, 'showOneQuizz'])->name('quizzes.show');
Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::get("/signup", [AuthController::class, 'signup'])->name('signup');
