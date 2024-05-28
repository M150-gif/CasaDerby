<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueurs extends Model
{
    use HasFactory;
    protected $table = 'joueurs';
    protected $fillable = [
        'nom', 'prenom', 'date_naissance', 'nationalite', 'taille', 'ancienne_equipe', 'id_equipe','poste','photo'
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    } 
}
