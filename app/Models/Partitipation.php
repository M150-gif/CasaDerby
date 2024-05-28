<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partitipation extends Model
{
    use HasFactory;
    protected $table = 'participation';

    protected $fillable = [
        'id_equipe', 'id_competition',
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
