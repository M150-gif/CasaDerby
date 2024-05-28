<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class casaderby extends Controller
{
    public function get_categories(){
        $categories=Categorie::all();
        $products=Product::all();
        return view('store.site_web.index',compact('categories','products'));
    }
}
