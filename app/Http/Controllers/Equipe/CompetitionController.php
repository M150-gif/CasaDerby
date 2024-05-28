<?php

namespace App\Http\Controllers\Equipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();
        return view('competitions.index', compact('competitions'));
    }
    
    public function ajouter_competi_rca(Request $request)
    {
        
    }
    public function ajouter_competi_wac(Request $request)
    {
        
    }
    public function create()
    {
        return view('competitions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_competition' => 'required|string|max:150',
            'periode_competition' => 'required|string|max:50',
        ]);

        Competition::create($request->all());

        return redirect()->route('competitions.index')->with('success', 'Competition created successfully.');
    }

    public function show(Competition $competition)
    {
        return view('competitions.show', compact('competition'));
    }

    public function edit(Competition $competition)
    {
        return view('competitions.edit', compact('competition'));
    }

    public function update(Request $request, Competition $competition)
    {
        $request->validate([
            'nom_competition' => 'required|string|max:150',
            'periode_competition' => 'required|string|max:50',
        ]);

        $competition->update($request->all());

        return redirect()->route('competitions.index')->with('success', 'Competition updated successfully.');
    }

    public function destroy(Competition $competition)
    {
        $competition->delete();
        return redirect()->route('competitions.index')->with('success', 'Competition deleted successfully.');
    }
}
