<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWritingTaskStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing_task_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('writing_task_id')->unsigned();
            $table->longText('comment')->nullable();
            $table->string('status_flag', 10)->nullable(false);
            $table->timestamps();

            $table->foreign('student_id', 'fk_wrt_tsk_stdnt_scr_student_id')
                ->references('id')
                ->on('student')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('writing_task_id', 'fk_wrt_tsk_stdnt_scr_writing_task_id')
                ->references('id')
                ->on('writing_task')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->index(['student_id', 'writing_task_id']);
            $table->index(['writing_task_id', 'student_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writing_task_student');
    }
}
