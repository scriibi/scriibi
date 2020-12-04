<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsLevelsGlobalCriteriasTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_levels_global_criterias', function (Blueprint $table) {
            $table->bigIncrements('skills_levels_global_criteria_Id');
            $table->bigInteger('skills_levels_Id')->unsigned();
            $table->bigInteger('global_criteria_Id')->unsigned();

            $table->unique('skills_levels_global_criteria_Id', 'skills_levels_global_criteria_Id');

            $table->foreign('skills_levels_Id', 'fk_skills-levels-global_criteria_scr-skills-levels2')
                ->references('skills_levels_Id')
                ->on('skills_levels')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('global_criteria_Id', 'fk_skills-levels-global_criteria_scr-strategies1')
                ->references('global_criteria_Id')
                ->on('global_criterias')
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
        Schema::dropIfExists('skills_levels_global_criterias');
    }
}
