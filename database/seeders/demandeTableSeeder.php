<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clientdemandes;

class demandeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clientdemandes::create([
            'prenom' => 'imen',
            'nomfamille' => 'lassoued',
            'telephone' => '27458963',
            'mail' => 'amouna@gmail',
            'ville' => 'Sfax',
            'pays' => 'Tunisie',
            'adresse' => "QP4C+RH5، طريق العين, Sfax",
            'remarque' => 'rien de remarque',
            'etat' => '2',
            'latitude' => 34.7406,
            'longitude' => 10.7603,
        ]);

        Clientdemandes::create([
            'prenom' => 'houda',
            'nomfamille' => 'jhone',
            'telephone' => '+54515145',
            'mail' => 'jhone@gmail',
            'ville' => 'Ben Girden',
            'pays' => 'Tunisie',
            'adresse' => "466C+QP, Ben Gardane",
            'remarque' => 'je veut un service rapide sil vous plait',
            'etat' => '2',
            'latitude' => 33.1378,
            'longitude' => 11.2178,
        ]);

        /* Clientdemandes::create([
            'prenom'=>'maria',
            'nomfamille'=>'mars',
            'telephone'=>'+284975621',
            'mail'=>'maria@gmail',
            'ville'=>'nice',
            'pays'=>'france',
            'adresse'=>'75021',
            'remarque'=>'',
            'etat'=>'0',
            ]);
            
        Clientdemandes::create([
            'prenom'=>'yasmine',
            'nomfamille'=>'yass',
            'telephone'=>'+267498325',
            'mail'=>'yass@gmail',
            'ville'=>'paris',
            'pays'=>'france',
            'adresse'=>'75011',
            'remarque'=>'rien de remarque',
            'etat'=>'0',
            ]); */
    }
}
