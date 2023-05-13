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
        Schema::create('indication_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('results_id')->unsigned();
            $table->foreign('results_id')->references('id')->on('results')->onDelete('cascade');
            $table->unsignedBigInteger('indication_id')->unsigned();
            $table->foreign('indication_id')->references('id')->on('indications')->onDelete('cascade');
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
        //
    }
};
