<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Annonce;

class AnnonceSeeder extends Seeder {
    public function run() {
        Annonce::create([
            'titre' => 'Appartement en centre-ville',
            'description' => 'Bel appartement bien situé.',
            'type' => 'Appartement',
            'ville' => 'Fès',
            'superficie' => 90,
            'neuf' => true,
            'prix' => 1200000.00,
        ]);
    }
}

