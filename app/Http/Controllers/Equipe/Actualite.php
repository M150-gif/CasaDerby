<?php
 
namespace App\Http\Controllers\Equipe;
 
use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Models\Actualites;
use App\Models\Equipe;
use Illuminate\Http\Request;
 
class ActualiteController extends Controller
{
    public function index()
    {
        $actualites = Actualites::with('equipe')->get();
        return view('actualites.index', compact('actualites'));
    }
 
    public function create()
    {
        $equipes = Equipe::all();
        return view('actualites.create', compact('equipes'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:150',
            'article' => 'required|string',
           'date_publication' => 'required|date',
            'id_equipe' => 'required|exists:equipes,id_equipe',
        ]);
 
        Actualites::create($request->all());
 
        return redirect()->route('actualites.index')->with('success', 'Actualité créée avec succès.');
    }
 
    public function show(Actualites $actualite)
    {
        $actualite->load('equipe');
        return view('actualites.show', compact('actualite'));
    }
 
    public function edit(Actualites $actualite)
    {
        $equipes = Equipe::all();
        return view('actualites.edit', compact('actualite', 'equipes'));
    }
 
    public function update(Request $request, Actualites $actualite)
    {
        $request->validate([
            'titre' => 'required|string|max:150',
            'article' => 'required|string',
            'date_publication' => 'required|date',
            'id_equipe' => 'required|exists:equipes,id_equipe',
        ]);
 
        $actualite->update($request->all());
 
        return redirect()->route('actualites.index')->with('success', 'Actualité mise à jour avec succès.');
    }
 
    public function destroy(Actualites $actualite)
    {
        $actualite->delete();
        return redirect()->route('actualites.index')->with('success', 'Actualité supprimée avec succès.');
    }
}

