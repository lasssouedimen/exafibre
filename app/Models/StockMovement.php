<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'libelle', 'entree', 'sortie', 'prix_unitaire', 'valeur'];
}
