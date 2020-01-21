<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumScriibiLevelSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_scriibi_level_skills', function (Blueprint $table) {
            $table->bigIncrements('curriculum_scriibi_levels_skills_Id');
            $table->bigInteger('curriculum_Id')->unsigned();
            $table->bigInteger('skill_Id')->unsigned();
            $table->bigInteger('scriibi_level_Id')->unsigned();

            $table->unique('curriculum_scriibi_levels_skills_Id', 'curriculum-scriibi_levels-skills_Id');
            $table->index('curriculum_Id');

            $table->foreign('curriculum_Id', 'fk_curriculum-scriibi-level-skills_scr-curriculum1')
                ->references('curriculum_Id')
                ->on('curriculum')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('skill_Id', 'fk_curriculum-scriibi-level-skills_scr-skills1')
                ->references('curriculum_Id')
                ->on('curriculum')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('scriibi_level_Id', 'fk_curriculum-scriibi-level-skills_scr-scriibi_levels1')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
                ->onDelete('no action')
                ->onUpdate('no action');

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
        Schema::dropIfExists('curriculum_scriibi_level_skills');
    }
}
