<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $table = 'equipe';
    
    protected $fillable = [
        'nom', 'nickname', 'logo', 'date_fondation', 'president', 'championnat_actuelle',
    ];

    public function joueurs()
    {
        return $this->hasMany(Joueurs::class, 'id_equipe');
    }

    public function actualites()
    {
        return $this->hasMany(Actualites::class, 'id_equipe');
    }

    public function classement()
    {
        return $this->hasMany(Classement::class, 'id_equipe');
    }

    public function palmares()
    {
        return $this->hasMany(Palmares::class, 'id_equipe');
    }

    public function matchs()
    {
        return $this->hasMany(Matchs::class, 'id_equipe_1');
    }

    public function matchs1()
    {
        return $this->hasMany(Matchs::class, 'id_equipe_2');
    }
}
