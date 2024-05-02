<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techniciens extends Model
{
    use HasFactory;
    protected $fillable = [
            'nom',
            'prenom',
            'Adresse',
            'Tel',
            'Age',
            'Datedébut',
            'mail',
            'arch',
            'dispo',
    ];
}
