<?php

use Illuminate\Database\Seeder;

class ComoditeTableInsert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comodites')->insert([
            'intitulet' => 'Caméras de surveillance',
            'intituletAR' => null,
        ]);

        DB::table('comodites')->insert([
            'intitulet' => 'Espaces verts et jeux pour enfants',
            'intituletAR' => null,
        ]);

        DB::table('comodites')->insert([
            'intitulet' => 'Parking de stationnement',
            'intituletAR' => null,
        ]);

        DB::table('comodites')->insert([
            'intitulet' => 'Appartement de type F3 F4 F5',
            'intituletAR' => null,
        ]);

        DB::table('comodites')->insert([
            'intitulet' => 'Matériaux de construction de bonne qualité',
            'intituletAR' => null,
        ]);

        DB::table('comodites')->insert([
            'intitulet' => 'Cuisine moderne',
            'intituletAR' => null,
        ]);
    }
}
