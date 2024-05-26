<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ligne_commande;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'quantite', 'prix','description'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'ID_categorie');
    }
    public function commandes()
    {
        return $this->belongsToMany(ligne_commande::class, 'product_id');
    }
}
