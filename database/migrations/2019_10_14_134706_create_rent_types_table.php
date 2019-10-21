<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lodgement_id');
            $table->string('name');
            $table->timestamps();
            $table->foreign('lodgement_id')->references('id')->on('lodgements')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rent_types');
    }
}
