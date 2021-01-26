<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumSkillLevelLocalCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_skill_level_local_criteria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('curriculum_skill_level_id')->unsigned();
            $table->bigInteger('local_criteria_id')->unsigned();
            $table->timestamps();

            $table->foreign('curriculum_skill_level_id', 'fk_curr_skl_lvl_loc_crt_scr_curriculum_skill_level_id')
                ->references('id')
                ->on('curriculum_skill_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('local_criteria_id', 'fk_curr_skl_lvl_loc_crt_scr_local_criteria_id')
                ->references('id')
                ->on('local_criteria')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['curriculum_skill_level_id', 'local_criteria_id'], 'curr_skl_lvl_lcl_crt_curr_skl_lvl_id_lcl_crt_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_skill_level_local_criteria');
    }
}
