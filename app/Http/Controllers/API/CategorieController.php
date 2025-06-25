<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Retourne la liste de toutes les catégories.
     */
    public function index()
    {
        return Categorie::all();
    }

    /**
     * Enregistre une nouvelle catégorie dans la base de données.
     * Valide que le champ "nom" est requis, de type chaîne et <= 255 caractères.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        return Categorie::create($request->all());
    }

    /**
     * Affiche les détails d’une catégorie spécifique.
     */
    public function show(Categorie $category)
    {
        return $category;
    }

    /**
     * Met à jour une catégorie existante avec validation du champ "nom".
     */
    public function update(Request $request, Categorie $category)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $category->update($request->all());
        return $category;
    }

    /**
     * Supprime une catégorie de la base de données.
     * Retourne une réponse JSON de confirmation.
     */
    public function destroy(Categorie $category)
    {
        $category->delete();
        return response()->json(['message' => 'Supprimé avec succès']);
    }
}
