<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillLevelStudentDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_level_student_definition', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('skill_level_id')->unsigned();
            $table->bigInteger('student_definition_id')->unsigned();
            $table->timestamps();

            $table->foreign('skill_level_id', 'fk_skl_lvl_stdnt_def_scr_skill_level_id')
                ->references('id')
                ->on('skill_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('student_definition_id', 'fk_skl_lvl_stdnt_def_scr_student_definition_id')
                ->references('id')
                ->on('student_definition')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->index(['skill_level_id', 'student_definition_id'], 'skl_lvl_stud_def_skil_lvl_id_stud_def_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_level_student_definition');
    }
}
