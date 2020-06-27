<?php

use Illuminate\Database\Seeder;

class BienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biens')->insert([
            'intitulet' => 'F2 Duplexe',
            'type' => 'Appartement',
            'surface' => 64,            
            'prix' => 1400000,
        ]);

        DB::table('biens')->insert([
            'intitulet' => 'F3 Duplexe',
            'type' => 'Appartement',
            'surface' => 75,            
            'prix' => 1600000,
        ]);

        DB::table('biens')->insert([
            'intitulet' => 'F4 Duplexe',
            'type' => 'Appartement',
            'surface' => 82,            
            'prix' => 2000000,
        ]);
    }
}
