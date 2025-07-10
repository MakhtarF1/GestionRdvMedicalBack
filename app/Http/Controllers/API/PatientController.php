<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        return Patient::all();
    }

    public function store(PatientRequest $request)
    {
        return patient::create($request->all());
    }

    public function show(Patient $patient)
    {
        return $patient;
    }

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
