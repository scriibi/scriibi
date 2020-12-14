<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumSkillLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_skill_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('skill_level_id')->unsigned();
            $table->bigInteger('curriculum_id')->unsigned();
            $table->timestamps();

            $table->foreign('skill_level_id', 'fk_curr_skl_lvl_scr_skill_level_id')
                ->references('id')
                ->on('skill_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('curriculum_id', 'fk_curr_skl_lvl_scr_curriculum_id')
                ->references('id')
                ->on('curriculum')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['skill_level_id', 'curriculum_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_skill_level');
    }
}
