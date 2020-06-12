<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImageFereignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::table('images_promos', function(Blueprint $table) {
            $table->foreign('promo_id')->references('id')->on('promos')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images_promos', function(Blueprint $table) {
            $table->dropForeign('images_promos_promo_id_foreign');
        });
    }
}
