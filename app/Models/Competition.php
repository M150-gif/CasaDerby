<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    protected $table = 'competition';
    protected $fillable = [
        'nom_competition', 'periode_competition',
    ];

    public function classement()
    {
        return $this->hasMany(Classement::class, 'id_competition');
    }

    public function palmares()
    {
        return $this->hasMany(Palmares::class, 'id_competition');
    }

    public function matchs()
    {
        return $this->hasMany(matchs::class, 'id_competition');
    }

}
