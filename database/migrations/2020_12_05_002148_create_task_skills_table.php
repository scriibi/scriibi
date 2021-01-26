<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('writing_task_id')->unsigned();
            $table->bigInteger('skill_id')->unsigned();
            $table->timestamps();

            $table->foreign('writing_task_id', 'fk_tsk_skl_scr_writing_task_id')
                ->references('id')
                ->on('writing_task')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('skill_id', 'fk_tsk_skl_scr_skill_id')
                ->references('id')
                ->on('skill')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['writing_task_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_skill');
    }
}
