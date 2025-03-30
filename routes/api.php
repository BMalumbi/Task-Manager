<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Controllers\Controllers\TaskController;
use App\Http\Controllers\Controllers\AuthController;

// Route de test pour vérifier que l'API fonctionne
Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});

// Routes d'authentification (Connexion / Inscription) - via Sanctum

// Route pour s'inscrire
Route::post('/register', [AuthController::class, 'register']);

// Route pour se connecter
Route::post('/login', [AuthController::class, 'login']);

// Route protégée pour obtenir les informations de l'utilisateur connecté
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes de gestion des tâches, protégées par l'authentification Sanctum

Route::middleware('auth:sanctum')->group(function () {
    // Route pour récupérer toutes les tâches de l'utilisateur
    Route::get('/tasks', [TaskController::class, 'index']);
    
    // Route pour créer une nouvelle tâche
    Route::post('/tasks', [TaskController::class, 'store']);
    
    // Route pour récupérer une tâche spécifique
    Route::get('/tasks/{task}', [TaskController::class, 'show']);
    
    // Route pour mettre à jour une tâche spécifique
    Route::put('/tasks/{task}', [TaskController::class, 'update']);
    
    // Route pour supprimer une tâche spécifique
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);
});

