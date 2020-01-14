<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_students', function (Blueprint $table) {
            $table->bigIncrements('teacher_student_Id');     // use a permissions list
            $table->bigInteger('teachers_user_Id')->unsigned();
            $table->bigInteger('students_student_Id')->unsigned();

            $table->unique('teacher_student_Id');
            $table->index('teachers_user_Id');
            $table->index('students_student_Id');

            $table->foreign('teachers_user_Id')
                ->references('user_Id')
                ->on('teachers')
                ->onDelete('no action')
                ->onUpdate('no action');
            
            $table->foreign('students_student_Id')
                ->references('student_Id')
                ->on('students')
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
        Schema::dropIfExists('teacher_students');
    }
}
