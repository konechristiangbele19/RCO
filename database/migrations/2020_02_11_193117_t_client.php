<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id_clients');
            $table->string('nom_prenom', 40);
            $table->string('pseudo', 30);
            $table->string('genre', 30);
            $table->string('email', 40)->unique();
            $table->string('contact', 13);
            $table->string('ville', 30);
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
        Schema::dropIfExists("clients");

    }
}
