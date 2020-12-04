<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRubrikLevelChangelogsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_rubrik_level_changelogs', function (Blueprint $table) {
            $table->bigIncrements('student_rubrik_level_changelog_Id');
            $table->bigInteger('students_student_Id')->unsigned();
            $table->bigInteger('teachers_user_Id')->unsigned();

            $table->unique('student_rubrik_level_changelog_Id', 'student_rubrik_level_changelog_Id_UNIQUE');
            $table->index('students_student_Id');
            $table->index('teachers_user_Id');

            $table->foreign('students_student_Id')
                ->references('student_Id')
                ->on('students')
                ->onDelete('no action')
                ->onUpdate('no action');
        
            $table->foreign('teachers_user_Id')
                ->references('user_Id')
                ->on('teachers')
                ->onDelete('no action')
                ->onUpdate('no action');


            $table->timestamps();                     // To record changes to student rubric level
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_rubrik_level_changelogs');
    }
}
