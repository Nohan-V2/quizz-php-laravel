<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResponseController;

Route::get("/", [HomeController::class, 'index']);
Route::get("/quizzes", [QuizzController::class, 'index']);
Route::get("/users", [UserController::class, 'index']);
Route::get("/questions", [QuestionController::class, 'index']);
Route::get("/responses", [ResponseController::class, 'index']);
