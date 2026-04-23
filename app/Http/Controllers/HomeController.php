<?php

namespace App\Http\Controllers;

use App\Models\Realisation;

class HomeController extends Controller
{
    public function index()
    {
        $realisations = Realisation::query()
            ->orderBy('ordre')
            ->latest()
            ->take(12)
            ->get();

        return view('index', compact('realisations'));
    }
}
