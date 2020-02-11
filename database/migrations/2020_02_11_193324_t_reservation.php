<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id_reservation');
            $table->dateTime('date_reservation');
            $table->timestamps();


            $table->foreign('id_client')->references('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_hotels')->references('hotels')
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
        //
        Schema::dropIfExists('reservation');
    }
}
