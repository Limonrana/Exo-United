<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_sec_title')->nullable();
            $table->text('about_sec_content')->nullable();
            $table->text('about_sec_image')->nullable();
            $table->text('about_details_content')->nullable();
            $table->string('service_icon_1')->nullable();
            $table->string('service_title_1')->nullable();
            $table->string('service_content_1')->nullable();
            $table->string('service_link_1')->nullable();
            $table->string('service_icon_2')->nullable();
            $table->string('service_title_2')->nullable();
            $table->string('service_content_2')->nullable();
            $table->string('service_link_2')->nullable();
            $table->string('service_icon_3')->nullable();
            $table->string('service_title_3')->nullable();
            $table->string('service_content_3')->nullable();
            $table->string('service_link_3')->nullable();
            $table->string('quote_title_1')->nullable();
            $table->string('quote_content_1')->nullable();
            $table->string('quote_charity_1')->nullable();
            $table->string('quote_title_2')->nullable();
            $table->string('quote_content_2')->nullable();
            $table->string('quote_charity_2')->nullable();
            $table->string('quote_title_3')->nullable();
            $table->string('quote_content_3')->nullable();
            $table->string('quote_charity_3')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
