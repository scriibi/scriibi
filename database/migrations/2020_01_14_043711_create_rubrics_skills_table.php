<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricsSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrics_skills', function (Blueprint $table) {
            $table->bigIncrements('rubrics_skills_Id');
            $table->bigInteger('skills_skill_Id')->unsigned();
            $table->bigInteger('rubrics_rubric_Id')->unsigned();

            $table->unique('rubrics_skills_Id');

            $table->foreign('skills_skill_Id')
            ->references('skill_Id')
            ->on('skills')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->foreign('rubrics_rubric_Id')
            ->references('rubric_Id')
            ->on('rubrics')
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
        Schema::dropIfExists('rubrics_skills');
    }
}
