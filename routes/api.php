<?php

use App\Http\Controllers\API\CategorieController;
use App\Http\Controllers\API\MedecinController;
use App\Http\Controllers\API\PatientController;
use App\Http\Controllers\API\ProduitController;
use App\Http\Controllers\API\RendezVousController;
use App\Http\Controllers\SoinController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Ce fichier contient toutes les routes de l’API RESTful du projet.
| Chaque route est automatiquement protégée par le middleware 'api'.
| Ces routes sont destinées à être utilisées par le frontend ou des clients HTTP.
|
*/

// 🧪 Route de test pour vérifier que l’API est opérationnelle
Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});

/*
|--------------------------------------------------------------------------
| Routes API Ressources
|--------------------------------------------------------------------------
|
| Chaque ligne suivante crée automatiquement les routes REST :
| GET /ressource       → index
| GET /ressource/{id}  → show
| POST /ressource      → store
| PUT /ressource/{id}  → update
| DELETE /ressource/{id} → destroy
|
*/

// 🧑‍⚕️ Routes pour les médecins
Route::apiResource('medecins', MedecinController::class);

// 🗂️ Routes pour les catégories de produits/soins
Route::apiResource('categories', CategorieController::class);

// 🛒 Routes pour les produits
Route::apiResource('produits', ProduitController::class);

// 💉 Routes pour les soins médicaux
Route::apiResource('soins', SoinController::class);

// 👤 Routes pour les patients
Route::apiResource('patients', PatientController::class);

// 📅 Routes pour les rendez-vous
Route::apiResource('rendezVous', RendezVousController::class);
