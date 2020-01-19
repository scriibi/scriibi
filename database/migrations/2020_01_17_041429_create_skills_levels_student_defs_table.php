<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsLevelsStudentDefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_levels_student_defs', function (Blueprint $table) {
            $table->bigIncrements('skills_levels_student_defs_Id');
            $table->bigInteger('student_definitions_Id')->unsigned();
            $table->bigInteger('skills_levels_Id')->unsigned();

            $table->unique('skills_levels_student_defs_Id');

            $table->foreign('student_definitions_Id')
                ->references('student_definitions_Id')
                ->on('student_definitions')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('skills_levels_Id')
                ->references('skills_levels_Id')
                ->on('skills_levels')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

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
        Schema::dropIfExists('skills_levels_student_defs');
    }
}
