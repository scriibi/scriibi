<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalCriteriaCurriculumScriibiLevelSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_criteria_curriculum_scriibi_level-skills', function (Blueprint $table) {
            $table->bigIncrements('criteria_curr_level_skill_Id');
            $table->bigInteger('local_criteria_Id')->unsigned();
            $table->bigInteger('curriculum-scriibi_levels-skills_Id')->unsigned();

            $table->unique('criteria_curr_level_skill_id', 'criteria_curr_level_skill_id');

            $table->foreign('local_criteria_Id', 'fk_local_critera-curriculum-scriibi_level-skills_scr')
            ->references('local_criteria_Id')
            ->on('local_criterias')
            ->onDelete('no action')
            ->onUpdate('no action');


            $table->foreign('curriculum-scriibi_levels-skills_Id', 'fk_local_critera-curriculum-scriibi_level-skills_curriculum-s1')
            ->references('curriculum_scriibi_levels_skills_Id')
            ->on('curriculum_scriibi_level_skills')
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
        Schema::dropIfExists('local_criteria_curriculum_scriibi_level-skills');
    }
}
