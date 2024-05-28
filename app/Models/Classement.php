<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classement extends Model
{
    use HasFactory;
    protected $table = 'classement';

    protected $fillable = [
        'position_equipe', 'nbr_match_joue', 'nbr_gaints', 'nbr_pertes', 'nbr_null', 'id_equipe', 'id_competition',
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
