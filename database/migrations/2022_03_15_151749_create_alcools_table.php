<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlcoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alcools', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("photo");
            $table->unsignedBigInteger('Type_Alcool');
            $table->foreign('Type_Alcool')->references('id')->on('type_alcools');
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
        Schema::dropIfExists('alcools');
    }
}
