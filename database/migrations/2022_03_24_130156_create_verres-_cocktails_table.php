<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerresCocktailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verres-_cocktails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idVerre');
            $table->foreign('idVerre')->references('id')->on('verres');
            $table->foreign('idCocktail')->references('id')->on('Cocktail');
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
        Schema::dropIfExists('verres-_cocktails');
    }
}
