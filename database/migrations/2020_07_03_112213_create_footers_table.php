<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('footer_logo')->nullable();
            $table->string('footer_logo_size')->nullable();
            $table->string('footer_right_text_1')->nullable();
            $table->string('footer_right_number_1')->nullable();
            $table->string('footer_right_text_2')->nullable();
            $table->string('footer_right_number_2')->nullable();
            $table->string('newsletter_heading')->nullable();
            $table->string('newsletter_subheading')->nullable();
            $table->string('social_icon_1')->nullable();
            $table->string('social_icon_link_1')->nullable();
            $table->string('social_icon_2')->nullable();
            $table->string('social_icon_link_2')->nullable();
            $table->string('social_icon_3')->nullable();
            $table->string('social_icon_link_3')->nullable();
            $table->string('social_icon_4')->nullable();
            $table->string('social_icon_link_4')->nullable();
            $table->string('copyright_text')->nullable();
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
        Schema::dropIfExists('footers');
    }
}
