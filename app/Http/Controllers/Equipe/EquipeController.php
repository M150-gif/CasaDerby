<?php

namespace App\Http\Controllers\Equipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return view('equipes.index', compact('equipes'));
    }

    public function create()
    {
        return view('equipes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:80',
            'nickname' => 'required|string|max:10',
            'logo' => 'nullable|string|max:80',
            'date_fondation' => 'required|date',
            'president' => 'required|string|max:150',
            'championnat_actuelle' => 'required|string|max:150',
        ]);

        Equipe::create($request->all());

        return redirect()->route('equipes.index')->with('success', 'Equipe created successfully.');
    }

    public function show(Equipe $equipe)
    {
        return view('equipes.show', compact('equipe'));
    }

    public function edit(Equipe $equipe)
    {
        return view('equipes.edit', compact('equipe'));
    }

    public function update(Request $request, Equipe $equipe)
    {
        $request->validate([
            'nom' => 'required|string|max:80',
            'nickname' => 'required|string|max:4',
            'logo' => 'nullable|string|max:80',
            'date_fondation' => 'required|date',
            'president' => 'required|string|max:150',
            'championnat_actuelle' => 'required|string|max:150',
        ]);

        $equipe->update($request->all());

        return redirect()->route('equipes.index')->with('success', 'Equipe updated successfully.');
    }

    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->route('equipes.index')->with('success', 'Equipe deleted successfully.');
    }
}
