<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('store.dashbord.categories.index', compact('categories'));
    }
    public function create()
    {
        return view('store.dashbord.categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('categories', 'public');
        }
        Categorie::create([
            'nom' => $request->nom,
            'image_path' => $path,
        ]);
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }
    public function show(Categorie $categorie)
    {
        $var=1;
        return view('store.dashbord.categories.show', compact('var','categorie'));
    }
 
    public function edit(Categorie $category)
    {
        return view('store.dashbord.categories.edit', compact('category'));
    }
    public function destroy(Categorie $categorie)
    {
        if ($categorie->image_path) {
            Storage::disk('public')->delete($categorie->image_path);
        }
        $categorie->delete();

        return redirect()->route('categories.index')->with('success_message', 'Category deleted successfully.');
    }
}
