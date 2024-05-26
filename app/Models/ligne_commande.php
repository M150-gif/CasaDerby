<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligne_commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'commande_id',
        'produit_id',
        'qte_commande',
        'prix_par_ligne',
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class, 'commande_id', 'commande_id');
    }

    public function produit()
    {
        return $this->belongsTo(Product::class, 'produit_id', 'produit_id');
    }
}
