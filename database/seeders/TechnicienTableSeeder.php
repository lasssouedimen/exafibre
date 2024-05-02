<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Techniciens;

class TechnicienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Techniciens::create([
            'nom'=>'Gueldiche',
            'prenom'=>'Naziha',
            'Adresse'=>'Chihemmik',
            'Tel'=>'12345678',
            'Age'=>'23',
            'Datedébut'=>'02/05/2024',
            'mail'=>'naziha@gmail.com',
            'arch'=>'0',
            'dispo'=>'0',
        ]);

        Techniciens::create([
            'nom'=>'Gueldiche',
            'prenom'=>'Naziha',
            'Adresse'=>'Chihemmik',
            'Tel'=>'12345678',
            'Age'=>'23',
            'Datedébut'=>'02/05/2024',
            'mail'=>'naziha@gmail.com',
            'arch'=>'0',
            'dispo'=>'0',
        ]);
    }
}
