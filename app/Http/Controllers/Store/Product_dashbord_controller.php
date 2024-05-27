<?php

namespace App\Http\Controllers\Store;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Product;

class Product_dashbord_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products=Product::all();
        return view('store.dashbord.Products.index',compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('store.dashbord.Products.create', compact('categories'));
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
        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Produit ajouté avec succès.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('store.dashbord.Products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Categorie::all();
        return view('store.dashbord.Products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'quantite' => 'required|integer',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Produit mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
            $product->delete(); // Soft delete the product
        return redirect()->route('products.index')->with('success', 'Produit supprimé avec succès.');
    }
}
