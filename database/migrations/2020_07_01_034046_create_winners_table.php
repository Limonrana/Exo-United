<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winners', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('winner_name')->nullable();
            $table->string('exp_title')->nullable();
            $table->string('winner_address')->nullable();
            $table->string('exp_date')->nullable();
            $table->string('winner_content')->nullable();
            $table->string('winner_review')->nullable();
            $table->string('winner_review_title')->nullable();
            $table->string('donation_title')->nullable();
            $table->text('donation_content')->nullable();
            $table->string('slug')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('gallery_image_1')->nullable();
            $table->string('gallery_image_2')->nullable();
            $table->string('donation_image')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_slug')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('winners');
    }
}
