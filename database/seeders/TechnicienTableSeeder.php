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
            'nom'=>'lassoued',
            'prenom'=>'imen',
            'Adresse'=>'rue de france ',
            'Tel'=>'27047681',
            'Age'=>'25',
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
            'Age'=>'22',
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
            'Age'=>'25',
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
            'Age'=>'24',
            'Datedébut'=>'25/05/2024',
            'mail'=>'mohamed@gmail.com',
            'arch'=>'0',
            'dispo'=>'1',
        ]);
    }
}
