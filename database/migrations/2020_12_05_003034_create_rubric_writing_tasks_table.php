<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricWritingTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubric_writing_task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rubric_id')->unsigned();
            $table->bigInteger('writing_task_id')->unsigned();
            $table->timestamps();

            $table->foreign('rubric_id', 'fk_rubc_wrt_tsk_scr_rubric_id')
                ->references('id')
                ->on('rubric')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->foreign('writing_task_id', 'fk_rubc_wrt_tsk_scr_writing_task_id')
                ->references('id')
                ->on('writing_task')
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubric_writing_task');
    }
}
