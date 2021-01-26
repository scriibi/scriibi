<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillLevelGlobalCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_level_global_criteria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('skill_level_id')->unsigned();
            $table->bigInteger('global_criteria_id')->unsigned();
            $table->timestamps();

            $table->foreign('skill_level_id', 'fk_skl_lvl_glb_crt_scr_skill_level_id')
                ->references('id')
                ->on('skill_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('global_criteria_id', 'fk_skl_lvl_glb_crt_scr_global_criteria_id')
                ->references('id')
                ->on('global_criteria')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['skill_level_id', 'global_criteria_id'], 'skl_lvl_glb_crt_skl_lvl_id_glb_crt_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_level_global_criteria');
    }
}
