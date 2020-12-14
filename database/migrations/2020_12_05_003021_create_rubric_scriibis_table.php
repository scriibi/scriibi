<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricScriibisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubric_scriibi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rubric_id')->unsigned();
            $table->bigInteger('curriculum_school_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('rubric_id', 'fk_rubc_scrb_scr_rubric_id')
                ->references('id')
                ->on('rubric')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->foreign('curriculum_school_type_id', 'fk_rubc_scrb_scr_curriculum_school_type_id')
                ->references('id')
                ->on('curriculum_school_type')
                ->onDelete('no action')
                ->onUpdate('no action');
            
            $table->index(['curriculum_school_type_id', 'rubric_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubric_scriibi');
    }
}
