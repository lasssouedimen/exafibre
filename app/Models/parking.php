<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parking extends Model
{
    use HasFactory;
    protected $fillable = [
        'Marque',
        'codegps',
        'Matricule',
        'kilométrage',
        'dispo',
       
];

}
