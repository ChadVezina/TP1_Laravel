<?php

namespace Database\Seeders;

use App\Models\Ville;
use Illuminate\Database\Seeder;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Montreal',
            'Quebec',
            'Laval',
            'Gatineau',
            'Longueuil',
            'Sherbrooke',
            'Saguenay',
            'Trois-Rivieres',
            'Terrebonne',
            'Saint-Jean-sur-Richelieu'
        ];

        foreach ($cities as $city) {
            Ville::firstOrCreate(['name' => $city]);
        }
    }
}
