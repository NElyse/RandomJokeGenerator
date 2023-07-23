<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;

Route::get('/random-joke', [JokeController::class, 'getRandomJoke']);
Route::get('/joke-categories', [JokeController::class, 'getJokeCategories']);
