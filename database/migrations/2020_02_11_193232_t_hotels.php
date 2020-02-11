<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class THotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id_hotel');
            $table->string('nom_hotel', 40);
            $table->string('type_chambre', 40);
            $table->string('localisation', 40);
            $table->string('nombre_chambre', 40);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('hotels');
    }
}
