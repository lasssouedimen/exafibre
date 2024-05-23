<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChefEquipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'Adresse',
        'Tel',
        'datenaissance',
        'Datedébut',
        'mail',
        'arch',
        'etat',
];
}
