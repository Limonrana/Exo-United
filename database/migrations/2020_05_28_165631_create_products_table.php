<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('exp_title')->nullable();
            $table->string('exp_subtitle')->nullable();
            $table->string('exp_content')->nullable();
            $table->string('end_time')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('charity_id')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('gallery_image_1')->nullable();
            $table->string('gallery_image_2')->nullable();
            $table->string('info_title')->nullable();
            $table->string('info_content')->nullable();
            $table->string('info_image')->nullable();
            $table->string('benefit_title')->nullable();
            $table->string('benefit_content')->nullable();
            $table->string('benefit_image')->nullable();
            $table->string('legal_title')->nullable();
            $table->string('legal_content')->nullable();
            $table->string('slug')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_slug')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->integer('status')->nullable();
            $table->integer('drawn')->default(0);
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
        Schema::dropIfExists('products');
    }
}
