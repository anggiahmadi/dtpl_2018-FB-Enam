<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLodgementTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodgement_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lodgement_id');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('default_picture')->nullable();
            $table->text('desc')->nullable();
            $table->double('price')->default(0);
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
        Schema::dropIfExists('lodgement_types');
    }
}
