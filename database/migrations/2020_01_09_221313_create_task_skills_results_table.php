<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskSkillsResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_skills_results', function (Blueprint $table) {
            $table->bigIncrements('result_Id');
            $table->bigInteger('writing_tasks_writing_task_Id')->unsigned();
            $table->bigInteger('skills_skill_Id')->unsigned();
            $table->double('result');

            $table->unique('result_Id');
            $table->index('writing_tasks_writing_task_Id');
            $table->index('skills_skill_Id');
            
            $table->foreign('writing_tasks_writing_task_Id')
                ->references('writing_task_Id')
                ->on('writing_tasks')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('skills_skill_Id')
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
        Schema::dropIfExists('task_skills_results');
    }
}
