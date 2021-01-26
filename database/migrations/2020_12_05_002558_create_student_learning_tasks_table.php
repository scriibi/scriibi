<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentLearningTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_learning_task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('learning_task_type_id')->unsigned();
            $table->bigInteger('skill_level_id')->unsigned();
            $table->bigInteger('teaching_period_id')->unsigned();
            $table->timestamps();

            $table->foreign('student_id', 'fk_stdnt_lern_tsk_scr_student_id')
                ->references('id')
                ->on('student')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('learning_task_type_id', 'fk_stdnt_lern_tsk_scr_learning_task_type_id')
                ->references('id')
                ->on('learning_task_type')
                ->onDelete('no action')
                ->onUpdate('no action');
            
            $table->foreign('skill_level_id', 'fk_stdnt_lern_tsk_scr_skill_level_id')
                ->references('id')
                ->on('skill_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('teaching_period_id', 'fk_stdnt_lern_tsk_scr_teaching_period_id')
                ->references('id')
                ->on('teaching_period')
                ->onDelete('no action')
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
        Schema::dropIfExists('student_learning_task');
    }
}
