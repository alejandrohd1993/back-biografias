<?php

use App\Http\Controllers\Api\BiographyController;
use App\Http\Controllers\Api\OccupationController;
use Illuminate\Support\Facades\Route;

Route::get('/biographies', [BiographyController::class, 'index']);
Route::get('/biographies/{id}', [BiographyController::class, 'show']);
Route::get('/occupations', [OccupationController::class, 'index']);
