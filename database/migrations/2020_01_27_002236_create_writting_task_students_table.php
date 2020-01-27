<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWrittingTaskStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writting_task_students', function (Blueprint $table) {
            $table->bigIncrements('writting_task_student_id');
            $table->bigInteger('fk_student_id')->unsigned();
            $table->bigInteger('fk_writting_task_id')->unsigned();
            $table->string('status', 45);

            $table->unique('writting_task_student_id');

            $table->foreign('fk_student_id')
                ->references('student_Id')
                ->on('students')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('fk_writting_task_id')
                ->references('writing_task_Id')
                ->on('writing_tasks')
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
        Schema::dropIfExists('writting_task_students');
    }
}
