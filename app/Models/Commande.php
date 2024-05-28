<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'price_totale'];


    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function ligneCommandes()
    {
        return $this->hasMany(ligne_commande::class, 'commande_id');
    }
}
