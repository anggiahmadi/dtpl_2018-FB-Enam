<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->enum('type', ['bike', 'car']);
            $table->string('name');
            $table->string('default_picture')->nullable();
            $table->text('desc')->nullable();
            $table->string('location');
            $table->double('lat')->default(-6.194392);
            $table->double('long')->default(106.847916);
            $table->double('price')->default(0);
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
        Schema::dropIfExists('vehicles');
    }
}
