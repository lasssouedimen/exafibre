<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maps extends Model
{
    use HasFactory;
    protected $fillable = [
        'ville_demande',
        'pays_demande',
        
    ];
    public function demandes()
    {
        return $this->belongsTo(Clientdemandes::class, "ville_demande","pays_demande");
    }
   
}
