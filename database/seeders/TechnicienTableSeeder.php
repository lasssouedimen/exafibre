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
            'nom'=>'lassoued',
            'prenom'=>'imen',
            'Adresse'=>'rue de france ',
            'Tel'=>'27047681',
            'Datenaissance'=>'02/02/2002',
            'Datedébut'=>'01/04/2024',
            'mail'=>'imen@gmail.com',
            'arch'=>'0',
            'dispo'=>'1',
        ]);
        Techniciens::create([
            'nom'=>'miledi',
            'prenom'=>'islem',
            'Adresse'=>'rue de marseille ',
            'Tel'=>'28061599',
            'Datenaissance'=>'22/03/2003',
            'Datedébut'=>'01/03/2024',
            'mail'=>'islem@gmail.com',
            'arch'=>'0',
            'dispo'=>'0',
        ]);
        Techniciens::create([
            'nom'=>'abdeli',
            'prenom'=>'zouhour',
            'Adresse'=>'rue de france ',
            'Tel'=>'28061599',
            'Datenaissance'=>'25/01/2008',
            'Datedébut'=>'05/05/2024',
            'mail'=>'zouhour@gmail.com',
            'arch'=>'0',
            'dispo'=>'0',
        ]);
        Techniciens::create([
            'nom'=>'mamadou',
            'prenom'=>'mohamed',
            'Adresse'=>'rue de paris ',
            'Tel'=>'50250544',
            'Datenaissance'=>'24/07/2021',
            'Datedébut'=>'25/05/2024',
            'mail'=>'mohamed@gmail.com',
            'arch'=>'0',
            'dispo'=>'1',
        ]);
    }
}
