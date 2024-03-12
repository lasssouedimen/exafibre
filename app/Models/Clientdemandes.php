<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientdemandes extends Model
{
    use HasFactory;
    protected $fillable = [
        'prenom',
        'nomfamille',
        'telephone',
        'mail',
        'ville',
        'pays',
        'region',
        'codepostal',
        'remarque',
        'etat'
    ];
}
