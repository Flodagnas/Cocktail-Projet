<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiropCocktailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sirop-_cocktails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idSirop');
            $table->foreign('idSirop')->references('id')->on('sirops');
            $table->unsignedBigInteger('idCocktails');
            $table->foreign('idCocktails')->references('id')->on('cocktails');
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
        Schema::dropIfExists('sirop-_cocktails');
    }
}
