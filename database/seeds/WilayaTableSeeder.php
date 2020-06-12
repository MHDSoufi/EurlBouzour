<?php

use Illuminate\Database\Seeder;

class WilayaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wilayas')->insert([
            'intitulet' => 'Adrar',
            'intituletAR' => '',
        ]);

        DB::table('wilayas')->insert([
            'intitulet' => 'Alger',
            'intituletAR' => '',
        ]);

        DB::table('wilayas')->insert([
            'intitulet' => 'Blida',
            'intituletAR' => '',
        ]);

        DB::table('wilayas')->insert([
            'intitulet' => 'Oran',
            'intituletAR' => '',
        ]);

        DB::table('wilayas')->insert([
            'intitulet' => 'Mostaganem',
            'intituletAR' => '',
        ]);

    }
}
