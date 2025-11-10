<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $occupations = [
            'Juglar',
            'Acordeonera',
            'Compositor',
            'Cantautor',
            'Corista',
            'Cantante',
            'Acordeonero',
            'Guacharaquero',
            'Cajero',
            'Verseador',
            'Percusionista',
            'Pianista',
            'Guitarrista',
            'Bajista',
            'Timbalero',
            'Conguero',
            'Folclorista',
            'Compositora',
        ];

        foreach ($occupations as $occupation) {
            DB::table('occupations')->insert([
                'name' => $occupation,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
