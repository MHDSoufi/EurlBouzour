<?php

use Illuminate\Database\Seeder;

class ComuneSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            DB::table('comunes')->insert(['intitulet' => 'Comune ' . $i,'intituletAr' => 'Comune ' . $i, 'wilaya_id' => rand(1, 5)]);
        }
    }
}
