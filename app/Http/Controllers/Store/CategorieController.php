<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('store.categories.index', compact('categories'));
    }
 
    public function create()
    {
        return view('store.categories.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);
 
        Categorie::create($request->all());
 
        return redirect()->route('categories.index')->with('success_message', 'Category created successfully.');
    }
 
    public function show(Categorie $category)
    {
        return view('store.categories.show', compact('category'));
    }
 
    public function edit(Categorie $category)
    {
        return view('store.categories.edit', compact('category'));
    }
 
 
    public function destroy(Categorie $category)
    {
        $category->delete();
 
        return redirect()->route('categories.index')->with('success_message', 'Category deleted successfully.');
    }
}
