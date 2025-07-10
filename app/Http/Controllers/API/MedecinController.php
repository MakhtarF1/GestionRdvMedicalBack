<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\MedecinRequest;
use App\Models\Medecin;


class MedecinController extends Controller
{
    public function index()
    {
        return Medecin::all();
    }

    public function store(MedecinRequest $request)
    {
        return Medecin::create($request->all());
    }

    public function show(Medecin $medecin)
    {
        return $medecin;
    }

    public function update(MedecinRequest $request, Medecin $medecin)
    {

        $medecin->update($request->all());
        return $medecin;
    }

    public function destroy(Medecin $medecin)
    {
        $medecin->delete();
        return response()->json(['message' => 'Supprimé avec succès']);
    }
}
