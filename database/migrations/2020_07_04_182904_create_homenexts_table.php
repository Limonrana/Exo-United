<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomenextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homenexts', function (Blueprint $table) {
            $table->id();
            $table->string('choose_us_title')->nullable();
            $table->string('choose_us_subtitle')->nullable();
            $table->string('choose_title_1')->nullable();
            $table->string('choose_title_2')->nullable();
            $table->string('choose_title_3')->nullable();
            $table->string('choose_title_4')->nullable();
            $table->string('choose_title_5')->nullable();
            $table->string('choose_title_6')->nullable();
            $table->string('choose_content_1')->nullable();
            $table->string('choose_content_2')->nullable();
            $table->string('choose_content_3')->nullable();
            $table->string('choose_content_4')->nullable();
            $table->string('choose_content_5')->nullable();
            $table->string('choose_content_6')->nullable();
            $table->string('choose_icon_1')->nullable();
            $table->string('choose_icon_2')->nullable();
            $table->string('choose_icon_3')->nullable();
            $table->string('choose_icon_4')->nullable();
            $table->string('choose_icon_5')->nullable();
            $table->string('choose_icon_6')->nullable();
            $table->string('choose_us_bg')->nullable();
            $table->string('work_step_title')->nullable();
            $table->string('work_step_subtitle')->nullable();
            $table->string('work_step_heading_1')->nullable();
            $table->string('work_step_heading_2')->nullable();
            $table->string('work_step_heading_3')->nullable();
            $table->string('work_step_subheading_1')->nullable();
            $table->string('work_step_subheading_2')->nullable();
            $table->string('work_step_subheading_3')->nullable();
            $table->string('work_step_icon_1')->nullable();
            $table->string('work_step_icon_2')->nullable();
            $table->string('work_step_icon_3')->nullable();
            $table->string('work_step_video_link')->nullable();
            $table->string('work_step_bg')->nullable();
            $table->string('winner_sec_title')->nullable();
            $table->string('winner_sec_subtitle')->nullable();
            $table->string('winner_sec_btn_text')->nullable();
            $table->integer('winner_display')->nullable();
            $table->string('user_sec_title')->nullable();
            $table->string('user_sec_subtitle')->nullable();
            $table->string('countdown_title_1')->nullable();
            $table->string('countdown_title_2')->nullable();
            $table->string('countdown_title_3')->nullable();
            $table->string('countdown_title_4')->nullable();
            $table->string('countdown_value_1')->nullable();
            $table->string('countdown_value_2')->nullable();
            $table->string('countdown_value_3')->nullable();
            $table->string('countdown_value_4')->nullable();
            $table->string('user_sec_btn_text')->nullable();
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
        Schema::dropIfExists('homenexts');
    }
}
