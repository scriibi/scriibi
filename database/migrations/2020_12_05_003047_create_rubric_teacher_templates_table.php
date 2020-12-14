<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricTeacherTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubric_teacher_template', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rubric_id')->unsigned();
            $table->bigInteger('teacher_id')->unsigned();
            $table->timestamps();

            $table->foreign('rubric_id', 'fk_rubc_tchr_temp_scr_rubric_id')
                ->references('id')
                ->on('rubric')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->foreign('teacher_id', 'fk_rubc_tchr_temp_scr_teacher_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->index(['teacher_id', 'rubric_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubric_teacher_template');
    }
}
