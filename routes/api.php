<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route pour l'authentification
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

use App\Http\Controllers\TrainingController;

// Création d'une formation
Route::post('/trainings', [TrainingController::class, 'store']);

// Modification d'une formation
Route::put('/trainings/{id}', [TrainingController::class, 'update']);

// Suppression d'une formation
Route::delete('/trainings/{id}', [TrainingController::class, 'destroy']);





Route::post('/trainings', [TrainingController::class, 'store']);


