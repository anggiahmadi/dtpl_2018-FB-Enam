<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSAndCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_s_and_c', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('tourism_site_id')->index();
            $table->timestamps();
            $table->unique(['category_id', 'tourism_site_id']);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tourism_site_id')->references('id')->on('tourism_sites')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_s_and_c');
    }
}
