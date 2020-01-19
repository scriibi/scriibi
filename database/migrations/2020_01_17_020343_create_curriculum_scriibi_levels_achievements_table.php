<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumScriibiLevelsAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_scriibi_levels_achievements', function (Blueprint $table) {
            $table->bigIncrements('curriculum_scriibi_levels_achievement_Id');
            $table->bigInteger('curriculum_Id')->unsigned();
            $table->bigInteger('scriibi_Level_Id')->unsigned();
            $table->bigInteger('achievement_Id')->unsigned();

            $table->unique('curriculum_scriibi_levels_achievement_Id', 'curriculum_scriibi_levels_achievement_Id');

            $table->foreign('curriculum_Id', 'fk_curriculum-scriibi_level-achievement_scr-curriculum1')
                ->references('curriculum_Id')
                ->on('curriculum')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('scriibi_Level_Id', 'fk_curriculum-scriibi_level-achievement_scr-scriibi_levels1')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');


            $table->foreign('achievement_Id', 'fk_curriculum-scriibi_level-achievement_achievement1')
                ->references('achievement_Id')
                ->on('achievements')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

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
        Schema::dropIfExists('curriculum_scriibi_levels_achievements');
    }
}
