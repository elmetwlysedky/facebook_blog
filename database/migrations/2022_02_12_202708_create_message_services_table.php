<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_item_id')->unsigned();
            $table->foreign('service_item_id')->references('id')->on('service_item');
            $table->unsignedBigInteger('message_id')->unsigned();
            $table->foreign('message_id')->references('id')->on('message');
            $table->string('type');
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
        Schema::dropIfExists('message_services');
    }
}
