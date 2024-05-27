<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReseauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             $reseau = [
          [
                'name' => 'Responsabilité Civile Pro+',
                'price' => 5,
            ], 
            [
                'name' => 'Cyber Assistance',
                'price' => 5,
            ],
            [
            'name' => "Pretty Cash  - l'Assistance Comptable",
            'price' => 5,
            ]


        ];

        foreach ($reseau as $item) {
            \App\Models\Reseau::create($item);
        }
    }
}
