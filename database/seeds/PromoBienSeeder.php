<?php

use Illuminate\Database\Seeder;

class PromoBienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promo_bien')->insert([
            'promo_id' => 1,
            'bien_id' => 2,
            'quantite' => 3,
        ]);

        DB::table('promo_bien')->insert([
            'promo_id' => 1,
            'bien_id' => 1,
            'quantite' => 3,
        ]);

        DB::table('promo_bien')->insert([
            'promo_id' => 1,
            'bien_id' => 3,
            'quantite' => 3,
        ]);

        DB::table('promo_bien')->insert([
            'promo_id' => 2,
            'bien_id' => 2,
            'quantite' => 3,
        ]);

        DB::table('promo_bien')->insert([
            'promo_id' => 2,
            'bien_id' => 3,
            'quantite' => 3,
        ]);
    }
}
