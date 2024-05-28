<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class casaderby extends Controller
{
    public function get_categories(){
        $categories=Categorie::all();
        return view('store.site_web.index',compact('categories'));
    }
}
