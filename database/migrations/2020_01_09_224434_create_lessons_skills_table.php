<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsSkillsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons_skills', function (Blueprint $table) {
            $table->bigIncrements('lessons_skills_Id');
            $table->bigInteger('lessons_skills_lessons_lesson_Id')->unsigned();
            $table->bigInteger('lessons_skills_skills_skill_Id')->unsigned();

            $table->unique('lessons_skills_Id');
            $table->index('lessons_skills_lessons_lesson_Id');
            $table->index('lessons_skills_skills_skill_Id');
            
            $table->foreign('lessons_skills_lessons_lesson_Id')
                ->references('lesson_Id')
                ->on('lessons')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('lessons_skills_skills_skill_Id')
                ->references('skill_Id')
                ->on('skills')
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
        Schema::dropIfExists('lessons_skills');
    }
}
