<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePromos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->string('nom_promo')->unique();
            $table->string('nom_promo_AR')->unique();
            $table->longText('description');
            $table->longText('descriptionAR');
            $table->string('adr');
            $table->string('adr_AR');
            $table->string('longitude');
            $table->string('lontitude');
            $table->string('coverImage')->nullable();
            $table->string('status')->default("en cours");
            $table->integer('comune_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promos');
    }
}
