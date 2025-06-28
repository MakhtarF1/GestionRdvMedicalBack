<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Affiche la liste de tous les patients.
     */
    public function index()
    {
        return Patient::all();
    }

    /**
     * Enregistre un nouveau patient dans la base de données.
     * Les données sont validées via PatientRequest.
     */
    public function store(PatientRequest $request)
    {
        return Patient::create($request->all());
    }

    /**
     * Affiche les détails d’un patient spécifique.
     * Laravel injecte automatiquement l'instance du modèle Patient.
     */
    public function show(Patient $patient)
    {
        return $patient;
    }

    /**
     * Met à jour les informations d’un patient.
     * Les données sont validées via PatientRequest.
     */
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());
        return $patient;
    }

   
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response()->json(['message' => 'Supprimé avec succès']);
    }
}
