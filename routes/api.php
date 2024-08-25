<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\MuscleGroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResources(
    [
        'exercises' => ExerciseController::class,
        'categories' => CategoryController::class,
        'muscle_groups' => MuscleGroupController::class
    ]
);
