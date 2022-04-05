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
            $table->foreign('idSoft')->references('id')->on('softs');
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
        Schema::dropIfExists('soft-_cocktails');
    }
}
