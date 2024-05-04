<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\parking;

class parkingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parking::create([
         'Marque'=>'FIAT',
        'codegps'=>'2AZ4',
        'Matricule'=>'25FR158RRR88',
        'kilométrage'=>'2515888',
        'dispo'=>'0',
        
    ]);
      Parking::create([
        'Marque'=>'CITROEN',
       'codegps'=>'8feAZ4',
       'Matricule'=>'5Fa158R8',
       'kilométrage'=>'125498',
       'dispo'=>'0',
       
   ]);
   Parking::create([
    'Marque'=>'PEUGEOT',
   'codegps'=>'++DAZ4',
   'Matricule'=>'25FTRRR88',
   'kilométrage'=>'589652',
   'dispo'=>'1',
]);
Parking::create([
    'Marque'=>'MAZDA',
   'codegps'=>'8AZ4',
   'Matricule'=>'25FR1YY8',
   'kilométrage'=>'251111',
   'dispo'=>'0',
   
]);Parking::create([
    'Marque'=>'RENAULT',
   'codegps'=>'2AZ4',
   'Matricule'=>'25FR158RRR88',
   'kilométrage'=>'2515888',
   'dispo'=>'1',
   
]);
    }
}
