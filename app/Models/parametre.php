<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parametre extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'logo',
        'email',
        'tel',
        'Adresse',
    ]; 

}
