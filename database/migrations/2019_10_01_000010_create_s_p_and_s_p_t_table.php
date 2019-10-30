<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSPAndSPTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_p_and_s_p_t', function (Blueprint $table) {
            $table->unsignedBigInteger('service_provider_id')->index();
            $table->unsignedBigInteger('service_provider_type_id')->index();
            $table->timestamps();
            $table->unique(['service_provider_id', 'service_provider_type_id'], 's_p_and_s_p_t_unique_key');
            $table->foreign('service_provider_id')->references('id')->on('service_providers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_provider_type_id')->references('id')->on('service_provider_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_p_and_s_p_t');
    }
}
