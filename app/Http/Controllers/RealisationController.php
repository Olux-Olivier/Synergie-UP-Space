<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index()
    {
        $realisations = Realisation::query()
            ->orderBy('ordre')
            ->latest()
            ->get();

        return view('admin.realisations.index', compact('realisations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'sous_titre' => 'nullable|string|max:255',
            'image_url' => 'required|url|max:2048',
            'ordre' => 'nullable|integer|min:0',
        ]);

        Realisation::create([
            'titre' => $validated['titre'],
            'sous_titre' => $validated['sous_titre'] ?? null,
            'image_url' => $validated['image_url'],
            'ordre' => $validated['ordre'] ?? 0,
        ]);

        return back()->with('success', 'Realisation ajoutee avec succes.');
    }

    public function update(Request $request, Realisation $realisation)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'sous_titre' => 'nullable|string|max:255',
            'image_url' => 'required|url|max:2048',
            'ordre' => 'nullable|integer|min:0',
        ]);

        $realisation->update([
            'titre' => $validated['titre'],
            'sous_titre' => $validated['sous_titre'] ?? null,
            'image_url' => $validated['image_url'],
            'ordre' => $validated['ordre'] ?? 0,
        ]);

        return back()->with('success', 'Realisation mise a jour.');
    }

    public function destroy(Realisation $realisation)
    {
        $realisation->delete();

        return back()->with('success', 'Realisation supprimee.');
    }
}
