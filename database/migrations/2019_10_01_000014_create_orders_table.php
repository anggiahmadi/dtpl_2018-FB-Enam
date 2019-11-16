<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->unsignedBigInteger('tourism_site_id')->nullable();
            $table->unsignedBigInteger('lodgement_type_id')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->unsignedBigInteger('service_provider_id')->nullable();
            $table->string('code')->unique();
            $table->integer('length_of_term')->default(1); // if select packages then will input same as package and not calculate to total price
            $table->integer('quantity')->default(1);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->double('detail_price')->default(0);
            $table->enum('status', ['NP', 'PA', 'CA']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tourism_site_id')->references('id')->on('tourism_sites')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lodgement_type_id')->references('id')->on('lodgement_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_provider_id')->references('id')->on('service_providers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
