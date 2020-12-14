<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskSkillStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_skill_student_result', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('writing_task_id')->unsigned();
            $table->bigInteger('skill_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('result')->unsigned();
            $table->bigInteger('task_skill_id')->unsigned();
            $table->timestamps();

            $table->foreign('writing_task_id', 'fk_tsk_skl_stdnt_res_scr_writing_task_id')
                ->references('id')
                ->on('writing_task')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('skill_id', 'fk_tsk_skl_stdnt_res_scr_skill_id')
                ->references('id')
                ->on('skill')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('student_id', 'fk_tsk_skl_stdnt_res_scr_student_id')
                ->references('id')
                ->on('student')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('result', 'fk_tsk_skl_stdnt_res_scr_result')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('task_skill_id', 'fk_tsk_skl_stdnt_res_scr_task_skill_id')
                ->references('id')
                ->on('task_skill')
                ->onDelete('cascade')
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
        Schema::dropIfExists('task_skill_student_result');
    }
}
