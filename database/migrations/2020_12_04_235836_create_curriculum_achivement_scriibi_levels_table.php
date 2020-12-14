<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumAchivementScriibiLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_achivement_scriibi_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('curriculum_id')->unsigned();
            $table->bigInteger('achievement_id')->unsigned();
            $table->bigInteger('scriibi_Level_id')->unsigned();
            $table->timestamps();

            $table->foreign('curriculum_id', 'fk_curr_scrb_lvl_achvmnt_scr_curriculum')
                ->references('id')
                ->on('curriculum')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('achievement_id', 'fk_curr_scrb_lvl_achvmnt_scr_achievement')
                ->references('id')
                ->on('achievement')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('scriibi_Level_id', 'fk_curr_scrb_lvl_achvmnt_scr_scriibi_level')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_achivement_scriibi_level');
    }
}
