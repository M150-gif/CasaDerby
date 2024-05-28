<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualites extends Model
{
    use HasFactory;
    protected $table = 'actualites';

    protected $fillable = [
        'titre', 'article', 'date_publication', 'id_equipe',
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }
}
