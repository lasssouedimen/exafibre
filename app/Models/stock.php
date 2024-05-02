<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'libellé',
        'qte',
        'prixunitaire',
        'valeur',
        'qte1',
        'prixunitaire1',
        'valeur1',
        'qte2',
        'prixunitaire2',
        'valeur2',
    ];
}
