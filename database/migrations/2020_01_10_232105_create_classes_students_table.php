<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_students', function (Blueprint $table) {
            $table->bigIncrements('classes_students_Id');
            $table->bigInteger('classes_class_Id')->unsigned();
            $table->bigInteger('students_student_Id')->unsigned();

            $table->unique('classes_students_Id');
            $table->index('classes_class_Id');
            $table->index('students_student_Id');

            $table->foreign('classes_class_Id')
                ->references('class_Id')
                ->on('classes')
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
        Schema::dropIfExists('classes_students');
    }
}
