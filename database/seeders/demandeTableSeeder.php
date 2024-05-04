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
        'prenom'=>'imen',
        'nomfamille'=>'lassoued',
        'telephone'=>'27458963',
        'mail'=>'amouna@gmail',
        'ville'=>'lyon',
        'pays'=>'france',
        'codepostal'=>'75001',
        'remarque'=>'rien de remarque',
        'etat'=>'0',
        ]);
        
        Clientdemandes::create([
            'prenom'=>'houda',
            'nomfamille'=>'jhone',
            'telephone'=>'+54515145',
            'mail'=>'jhone@gmail',
            'ville'=>'toulouse',
            'pays'=>'france',
            'codepostal'=>'75005',
            'remarque'=>'je veut un service rapide sil vous plait',
            'etat'=>'0',
            ]);
            
        Clientdemandes::create([
            'prenom'=>'maria',
            'nomfamille'=>'mars',
            'telephone'=>'+284975621',
            'mail'=>'maria@gmail',
            'ville'=>'nice',
            'pays'=>'france',
            'codepostal'=>'75021',
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
            'codepostal'=>'75011',
            'remarque'=>'rien de remarque',
            'etat'=>'0',
            ]);
    }
}
    