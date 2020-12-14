<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricSharedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubric_shared', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rubric_id')->unsigned();
            $table->bigInteger('sharer_teacher_id')->unsigned();
            $table->bigInteger('sharee_teacher_id')->unsigned();
            $table->timestamps();

            $table->foreign('rubric_id', 'fk_rubc_shrd_scr_rubric_id')
                ->references('id')
                ->on('rubric')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->foreign('sharer_teacher_id', 'fk_rubc_shrd_scr_sharer_teacher_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->foreign('sharee_teacher_id', 'fk_rubc_shrd_scr_sharee_teacher_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->index(['sharee_teacher_id', 'rubric_id']);
            $table->index(['sharer_teacher_id', 'rubric_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubric_shared');
    }
}
