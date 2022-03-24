<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFruitsCocktailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruits-_cocktails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idFruit');
            $table->foreign('idFruit')->references('id')->on('fruits');
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
        Schema::dropIfExists('fruits-_cocktails');
    }
}
