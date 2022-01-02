<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('simuno', function (Blueprint $table) {
            $table->increments("id");
            $table->string("serie");
            $table->string("keyread");
            $table->string("keywrite");
            $table->string("lat");
            $table->string("lng");
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
        Schema::dropIfExists('simuno');
    }
}
