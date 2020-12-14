<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWritingTaskClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing_task_class', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('class_id')->unsigned();
            $table->bigInteger('writing_task_id')->unsigned();
            $table->timestamps();

            $table->foreign('class_id', 'fk_wrt_tsk_cls_scr_class_id')
                ->references('id')
                ->on('class')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('writing_task_id', 'fk_wrt_tsk_cls_scr_writing_task_id')
                ->references('id')
                ->on('writing_task')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->index(['class_id', 'writing_task_id']);
            $table->index(['writing_task_id', 'class_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writing_task_class');
    }
}
