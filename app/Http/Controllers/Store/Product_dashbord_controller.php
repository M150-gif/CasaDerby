<?php

namespace App\Http\Controllers\Store;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class Product_dashbord_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(){
        return view('store.dashbord.dashboard',compact('productsCount'));
    }
    public function index()
    {
        $Products = Product::all();
        return view('store.dashbord.Products.index',compact('Products',));
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
                  'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              ]);
          
              // Handle file upload
              $path = null;
              if ($request->hasFile('image')) {
                  $path = $request->file('image')->store('products', 'public');
                  Product::create([
                     'nom' => $request->nom,
                     'quantite' => $request->quantite,
                     'description' => $request->description,
                     'prix' => $request->prix,
                     'categorie_id' => $request->categorie_id,
                     'image_path'=>$path
                 ]);
                 return redirect()->route('products.index')->with('success', 'Produit ajouté avec succès.');
              }
          
              // Create product with image path
            
          
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'quantite' => 'required|integer',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Find the product by id
        $product = Product::findOrFail($id);
    
        // Handle file upload
        if ($request->hasFile('image')) {
            // Delete the previous image if exists
            Storage::disk('public')->delete($product->image_path);
            
            // Store the new image
            $path = $request->file('image')->store('products', 'public');
            $product->image_path = $path;
        }
    
        // Update product details
        $product->nom = $request->nom;
        $product->quantite = $request->quantite;
        $product->description = $request->description;
        $product->prix = $request->prix;
        $product->categorie_id = $request->categorie_id;
        $product->save();
    
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
