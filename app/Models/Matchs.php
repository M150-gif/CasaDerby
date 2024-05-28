<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    use HasFactory;
    protected $table = 'matchs';

    protected $fillable = [
        'date_match', 'lieu', 'etat', 'score', 'id_competition', 'id_equipe', 'id_equipe_1',
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class, 'id_competition');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe_1');
    }

    public function equipe1()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe_2');
    }
}
