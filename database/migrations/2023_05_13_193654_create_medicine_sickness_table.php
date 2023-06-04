<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_sickness', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sickness_id')->unsigned();
            $table->foreign('sickness_id')->references('id')->on('sicknesses')->onDelete('cascade');
            $table->unsignedBigInteger('medicine_id')->unsigned();
            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
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
        Schema::dropIfExists('medicine_sickness');
    }
};
