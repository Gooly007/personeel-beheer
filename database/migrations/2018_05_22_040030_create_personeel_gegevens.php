<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersoneelGegevens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personeel_gegevens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sedula');
            $table->string('achternaam');
            $table->string('meisjesnaam');
            $table->string('voornaam');
            $table->string('geboorteplaats');
            $table->string('nationaliteit');
            $table->string('adres');
            $table->string('burgelijkestaat');
            $table->integer('telefoon_thuis');
            $table->integer('telefoon_mobiel');
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
        Schema::dropIfExists('personeel_gegevens');
    }
}
