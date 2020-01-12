<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_students', function (Blueprint $table) {
            $table->bigIncrements('tasks_students_Id');
            $table->bigInteger('result_Id')->unsigned();
            $table->bigInteger('student_Id')->unsigned();
            $table->bigInteger('level_before_attempt')->unsigned();

            $table->unique('tasks_students_Id');
            $table->index('result_Id');
            $table->index('student_Id');
            $table->index('level_before_attempt');

            $table->foreign('result_Id')
                ->references('result_Id')
                ->on('task_skills_results')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('student_Id')
                ->references('student_Id')
                ->on('students')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('level_before_attempt')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
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
        Schema::dropIfExists('tasks_students');
    }
}
