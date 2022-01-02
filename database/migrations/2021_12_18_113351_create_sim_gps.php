<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimGps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sim_gps', function (Blueprint $table) {
            $table->increments("id");
            $table->string("lnt");
            $table->string("lng");
            $table->integer("sim_id")->unsigned();
            $table->foreign("sim_id")->references("id")->on("simuno");
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
        Schema::dropIfExists('sim_gps');
    }
}
