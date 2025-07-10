<?php

namespace App\Http\Controllers;

use App\Models\Soin;
use Illuminate\Http\Request;

class SoinController extends Controller
{
    public function index()
    {
        return Soin::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'cout' => 'required|max:255',
        ]);

        return Soin::create($request->all());
    }

    public function show(Soin $soin)
    {
        return $soin;
    }

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
