<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('student_Id');
            $table->string('student_First_Name', 45);
            $table->string('student_Last_Name', 45);
            $table->string('Student_Gov_Id', 45);
            $table->bigInteger('enrolled_Level_Id')->unsigned();
            $table->bigInteger('rubrik_level')->unsigned();
            $table->bigInteger('schools_school_Id')->unsigned();
            $table->double('suggested level');
            
            $table->unique('Student_Gov_Id');
            $table->unique('student_Id');
            $table->index('rubrik_level');
            $table->index('schools_school_Id');

            $table->foreign('enrolled_Level_Id')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('rubrik_level')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
                ->onDelete('no action')
                ->onUpdate('no action');
            
            $table->foreign('schools_school_Id')
                ->references('school_Id')
                ->on('schools')
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
        Schema::dropIfExists('students');
    }
}
