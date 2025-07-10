<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RendezVousRequest;
use App\Models\RendezVous;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    

    public function index()
    {
        return RendezVous::all();
    }


    public function store(RendezVousRequest $request)
    {
        
        return RendezVous::create($request->all());
    }


    public function show(RendezVous $rendezVous)
    {
        return $rendezVous;
    }


    public function update(RendezVousRequest $request, RendezVous $rendezVous)
    {
        $rendezVous->update($request->all());
        return $rendezVous;
    }
    

    public function destroy(RendezVous $rendezVous)
    {
        $rendezVous->delete();
        return response()->json(['message' => 'Supprimé avec succès']);
    }
}
