<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComuneForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comunes', function(Blueprint $table) {
            $table->foreign('wilaya_id')->references('id')->on('wilayas')
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
        Schema::table('comunes', function(Blueprint $table) {
            $table->dropForeign('comunes_wilaya_id_foreign');
        });
    }
}
