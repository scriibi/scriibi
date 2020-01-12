<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumScriibiLevelsCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_scriibi_levels_criterias', function (Blueprint $table) {
            $table->bigIncrements('curriculum_scriibi_levels_criteria_Id');
            $table->bigInteger('fk_curriculum_scriibi_levels_Id')->unsigned();
            $table->bigInteger('local_criteria_criteria_Id')->unsigned();
            $table->bigInteger('global_criteria_global_criteria_Id')->unsigned();

            $table->unique('curriculum_scriibi_levels_criteria_Id', 'curr_scriibi_lvls_criterias_curr_scriibi_lvls_criteria_id_unique');
            $table->index('fk_curriculum_scriibi_levels_Id', 'curric_scriibi_lvls_criterias_fk_curric_scriibi_lvls_id_index');
            $table->index('local_criteria_criteria_Id', 'fk_curriculum_scriibi_levels_skills_local_criteria1_idx');
            $table->index('global_criteria_global_criteria_Id', 'fk_curriculum_scriibi_levels_skills_global_criteria1_idx');

            $table->foreign('fk_curriculum_scriibi_levels_Id', 'fk_curriculum_scriibi_levels_skills_curriculum_scriibi_levels1')
                ->references('curriculum_scriibi_levels_Id')
                ->on('curriculum_scriibi_levels')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('local_criteria_criteria_Id', 'fk_curriculum_scriibi_levels_skills_local_criteria1')
                ->references('criteria_Id')
                ->on('local_criterias')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('global_criteria_global_criteria_Id', 'fk_curriculum_scriibi_levels_skills_global_criteria1')
                ->references('global_criteria_Id')
                ->on('global_criterias')
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
        Schema::dropIfExists('curriculum_scriibi_levels_criterias');
    }
}
