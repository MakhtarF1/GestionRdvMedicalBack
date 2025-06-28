<?php

namespace App\Http\Controllers;

use App\Models\Soin;
use Illuminate\Http\Request;

class SoinController extends Controller
{
    /**
     * Retourne la liste de tous les soins.
     */
    public function index()
    {
        return Soin::all();
    }

    /**
     * Enregistre un nouveau soin après validation des données.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'cout' => 'required|max:255',
        ]);

        return Soin::create($request->all());
    }

    /**
     * Affiche les détails d’un soin spécifique.
     */
    public function show(Soin $soin)
    {
        return $soin;
    }

    /**
     * Met à jour les informations d’un soin existant avec validation.
     */
    public function update(Request $request, Soin $soin)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'cout' => 'required|max:255',
        ]);

        $soin->update($request->all());
        return $soin;
    }

  
    public function destroy(Soin $soin)
    {
        $soin->delete();
        return response()->json(['message' => 'Supprimé avec succès']);
    }
}
