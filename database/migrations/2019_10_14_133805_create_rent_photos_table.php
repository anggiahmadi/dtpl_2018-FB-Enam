<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rent_id');
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->foreign('rent_id')->references('id')->on('rents')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rent_photos');
    }
}
