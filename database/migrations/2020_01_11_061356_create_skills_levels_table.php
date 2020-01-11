<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_levels', function (Blueprint $table) {
            $table->bigIncrements('skills_levels_Id');
            $table->bigInteger('skills_levels_skills_skill_Id')->unsigned();
            $table->bigInteger('scriibi_levels_scriibi_Level_Id')->unsigned();
            $table->bigInteger('strategies_strategies_Id')->unsigned();
            $table->bigInteger('student_definitions_student_definitions_Id')->unsigned();

            $table->index('skills_levels_skills_skill_Id');
            $table->index('scriibi_levels_scriibi_Level_Id');
            $table->index('strategies_strategies_Id');
            $table->index('student_definitions_student_definitions_Id');

            $table->foreign('skills_levels_skills_skill_Id')
                ->references('skill_Id')
                ->on('skills')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('scriibi_levels_scriibi_Level_Id')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('strategies_strategies_Id')
                ->references('strategies_Id')
                ->on('strategies')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('student_definitions_student_definitions_Id')
                ->references('student_definitions_Id')
                ->on('student_definitions')
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
        Schema::dropIfExists('skills_levels');
    }
}
