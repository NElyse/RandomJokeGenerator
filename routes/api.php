<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;

Route::get('/random-joke', [JokeController::class, 'getRandomJoke']);
