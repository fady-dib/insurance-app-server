<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatutJuridiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $data = [
          [
                'name' => 'statut 1',
               
            ], 
            [
                'name' => 'statut 2',
                
            ],
            [
            'name' => "Salarié",
            ]


        ];

        foreach ($data as $item) {
            \App\Models\StatutJuridique::create($item);
        }
    }
}
