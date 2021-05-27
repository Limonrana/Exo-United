<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrylevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrylevels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experience_id')->nullable();
            $table->string('entry_title')->nullable();
            $table->string('entry_quantity')->nullable();
            $table->string('entry_description')->nullable();
            $table->string('entry_price')->nullable();
            $table->string('entry_image')->nullable();
            $table->string('recommend_badge')->nullable();
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
        Schema::dropIfExists('entrylevels');
    }
}
