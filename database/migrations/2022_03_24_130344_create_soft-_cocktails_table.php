<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftCocktailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soft-_cocktails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idSoft');
            $table->unsignedBigInteger('idCocktail');
            $table->foreign('idSoft')->references('id')->on('softs');
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
        Schema::dropIfExists('soft-_cocktails');
    }
}
