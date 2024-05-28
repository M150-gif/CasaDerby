<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palmares extends Model
{
    use HasFactory;
    protected $table = 'palmares';

    protected $fillable = [
        'nom_titre', 'annee', 'id_competition', 'id_equipe',
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class, 'id_competition');
    }
}
