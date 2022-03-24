<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlcoolCocktailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alcool-_cocktails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAlcool');
            $table->unsignedBigInteger('idCocktail');
            $table->foreign('idAlcool')->references('id')->on('alcools');
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
        Schema::dropIfExists('alcool-_cocktails');
    }
}
