<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_teachers', function (Blueprint $table) {
            $table->bigIncrements('school_teacher_Id');
            $table->bigInteger('teachers_user_Id')->unsigned();
            $table->bigInteger('schools_school_Id')->unsigned();

            $table->unique('school_teacher_Id');
            $table->index('teachers_user_Id');
            $table->index('schools_school_Id');

            $table->foreign('teachers_user_Id')
                ->references('user_Id')
                ->on('teachers')
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
        Schema::dropIfExists('school_teachers');
    }
}
