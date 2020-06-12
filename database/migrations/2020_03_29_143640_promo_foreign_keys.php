<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromoForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('promos', function(Blueprint $table) {
            $table->foreign('comune_id')->references('id')->on('comunes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promos', function(Blueprint $table) {
            $table->dropForeign('promos_comune_id_foreign');
            $table->dropForeign('promos_user_id_foreign');
        });
    }
}
