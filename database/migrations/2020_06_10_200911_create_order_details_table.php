<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('entry_id');
            $table->unsignedBigInteger('exp_id');
            $table->string('exp_title')->nullable();
            $table->string('entry_title')->nullable();
            $table->string('quantity')->nullable();
            $table->string('entry_price')->nullable();
            $table->string('total_price')->nullable();
            $table->integer('review')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
