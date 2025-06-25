<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\MedecinRequest;
use App\Models\Medecin;

class MedecinController extends Controller
{
    /**
     * Affiche la liste de tous les médecins.
     */
    public function index()
    {
        return Medecin::all();
    }

    /**
     * Enregistre un nouveau médecin dans la base de données.
     * Les données sont validées via MedecinRequest.
     */
    public function store(MedecinRequest $request)
    {
        return Medecin::create($request->all());
    }

    /**
     * Affiche les détails d’un médecin spécifique.
     * Laravel injecte automatiquement l'instance du modèle Medecin.
     */
    public function show(Medecin $medecin)
    {
        return $medecin;
    }

    /**
     * Met à jour les informations d’un médecin.
     * Les données sont validées via MedecinRequest.
     */
    public function update(MedecinRequest $request, Medecin $medecin)
    {
        $medecin->update($request->all());
        return $medecin;
    }

    /**
     * Supprime un médecin de la base de données.
     * Retourne une réponse JSON de confirmation.
     */
    public function destroy(Medecin $medecin)
    {
        $medecin->delete();
        return response()->json(['message' => 'Supprimé avec succès']);
    }
}
