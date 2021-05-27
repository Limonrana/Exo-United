<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('offer_title')->nullable();
            $table->string('offer_content')->nullable();
            $table->string('offer_heading_1')->nullable();
            $table->string('offer_subheading_1')->nullable();
            $table->string('offer_button_text_1')->nullable();
            $table->string('offer_button_link_1')->nullable();
            $table->string('offer_image_1')->nullable();
            $table->string('offer_heading_2')->nullable();
            $table->string('offer_subheading_2')->nullable();
            $table->string('offer_button_text_2')->nullable();
            $table->string('offer_button_link_2')->nullable();
            $table->string('offer_image_2')->nullable();
            $table->string('offer_heading_3')->nullable();
            $table->string('offer_subheading_3')->nullable();
            $table->string('offer_button_text_3')->nullable();
            $table->string('offer_button_link_3')->nullable();
            $table->string('offer_image_3')->nullable();
            $table->string('featured_exp_title')->nullable();
            $table->string('featured_exp_subtitle')->nullable();
            $table->integer('featured_exp_display')->nullable();
            $table->string('exo_exp_title')->nullable();
            $table->string('exo_exp_subtitle')->nullable();
            $table->integer('exo_exp_display')->nullable();
            $table->string('last_exp_title')->nullable();
            $table->string('last_exp_subtitle')->nullable();
            $table->integer('last_exp_display')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
