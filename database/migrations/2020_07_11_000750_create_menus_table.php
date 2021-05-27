<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('h_menu_1')->nullable();
            $table->string('h_menu_1_link')->nullable();
            $table->string('h_menu_2')->nullable();
            $table->string('h_menu_2_link')->nullable();
            $table->string('h_menu_3')->nullable();
            $table->string('h_menu_3_link')->nullable();
            $table->string('h_menu_4')->nullable();
            $table->string('h_menu_4_link')->nullable();
            $table->string('h_menu_5')->nullable();
            $table->string('h_menu_6')->nullable();
            $table->string('h_menu_7')->nullable();
            $table->string('h_menu_8')->nullable();
            $table->string('h_menu_9')->nullable();
            $table->string('f_menu_1')->nullable();
            $table->string('f_menu_2')->nullable();
            $table->string('f_menu_3')->nullable();
            $table->string('f_menu_4')->nullable();
            $table->string('f_menu_5')->nullable();
            $table->string('f_menu_6')->nullable();
            $table->string('f_menu_7')->nullable();
            $table->string('f_menu_8')->nullable();
            $table->string('f_menu_9')->nullable();
            $table->string('f_menu_10')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
