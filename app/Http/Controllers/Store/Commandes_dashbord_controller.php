<?php

namespace App\Http\Controllers\Store;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Commande;

class Commandes_dashbord_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = Commande::with('client')->paginate(10);
        return view('store.dashbord.commandes.index', compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('store.dashbord.commandes.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'quantite' => 'required|integer',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|exists:categories,id',
        ]);
        commande::create($request->all());

        return redirect()->route('commandes.index')->with('success', 'Produit ajouté avec succès.');
    }
    /**
     * Display the specified resource.
     */
    public function show(commande $commande)
    {
        return view('store.dashbord.commandes.show', compact('commande'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commande $commande)
    {
        $categories = Categorie::all();
        return view('store.dashbord.commandes.edit', compact('commande', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, commande $commande)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'quantite' => 'required|integer',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $commande->update($request->all());

        return redirect()->route('commandes.index')->with('success', 'Produit mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commande $commande)
    {
            $commande->delete(); // Soft delete the commande
        return redirect()->route('commandes.index')->with('success', 'Produit supprimé avec succès.');
    }
}
