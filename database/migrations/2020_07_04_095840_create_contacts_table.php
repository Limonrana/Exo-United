<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('left_title')->nullable();
            $table->string('left_content')->nullable();
            $table->string('notification_email')->nullable();
            $table->string('right_title')->nullable();
            $table->string('right_content')->nullable();
            $table->string('right_details_title')->nullable();
            $table->string('right_phone_1')->nullable();
            $table->string('right_phone_2')->nullable();
            $table->string('right_email_1')->nullable();
            $table->string('right_email_2')->nullable();
            $table->string('right_bg_image')->nullable();
            $table->string('map_latitude')->nullable();
            $table->string('map_longitude')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
