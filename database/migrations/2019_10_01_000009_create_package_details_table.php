<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('tourism_site_id')->nullable();
            $table->unsignedBigInteger('lodgement_type_id')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->timestamps();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tourism_site_id')->references('id')->on('tourism_sites')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lodgement_type_id')->references('id')->on('lodgement_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_details');
    }
}
