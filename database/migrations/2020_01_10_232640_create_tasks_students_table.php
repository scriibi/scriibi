<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksStudentsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_students', function (Blueprint $table) {
            $table->bigIncrements('tasks_students_Id');
            $table->bigInteger('result')->unsigned();
            $table->bigInteger('student_Id')->unsigned();
            $table->bigInteger('tasks_skills_Id')->unsigned();

            $table->unique('tasks_students_Id');

            $table->index('tasks_students_Id');

            $table->index('student_Id');
            $table->index('result');
            $table->index('tasks_skills_Id');

            $table->foreign('result')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('student_Id')
                ->references('student_Id')
                ->on('students')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tasks_skills_Id')
                ->references('tasks_skills_Id')
                ->on('tasks_skills')
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
