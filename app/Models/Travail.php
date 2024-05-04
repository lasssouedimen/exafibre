<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_demande',
        'id_technicien',
        'id_parking',
        'datedebut',
        'datefin ',
    ];
    public function demandes()
    { 
        return $this->belongsTo(Clientdemandes::class,"id_demande"); 
    }public function techniciens()
    { 
        return $this->belongsTo(Techniciens::class,"id_technicien"); 
    }public function parkings()
    { 
        return $this->belongsTo(parking::class,"id_parking"); 
    }
}
