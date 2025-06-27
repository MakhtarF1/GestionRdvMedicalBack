<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Retourne la liste de tous les produits avec leur catégorie associée.
     */
    public function index()
    {
        return Produit::with('categorie')->get();
    }

    /**
     * Enregistre un nouveau produit après validation via ProduitRequest.
     */
    public function store(ProduitRequest $request)
    {
        return Produit::create($request->all());
    }

    /**
     * Affiche les détails d’un produit spécifique.
     */
    public function show(Produit $produit)
    {
        return $produit;
    }

   
    public function update(ProduitRequest $request, Produit $produit)
    {
        $produit->update($request->all());
        return $produit;
    }

    /**
     * Supprime un produit de la base de données.
     * Retourne une réponse JSON confirmant la suppression.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return response()->json(['message' => 'Supprimé avec succès']);
    }
}
