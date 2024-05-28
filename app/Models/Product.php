<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ligne_commande;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nom', 'quantite', 'prix','description','categorie_id','image_path'
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'ID_categorie');
    }
    public function commandes()
    {
        return $this->belongsToMany(ligne_commande::class, 'product_id');
    }
    protected $dates = ['deleted_at'];

}
