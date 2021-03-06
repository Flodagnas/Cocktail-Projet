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
            $table->foreign('idAlcool')
                ->references('id')
                ->on('alcools')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('idCocktails');
            $table->foreign('idCocktails')
                ->references('id')
                ->on('cocktails')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
