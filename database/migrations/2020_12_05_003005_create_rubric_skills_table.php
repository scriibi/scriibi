<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubric_skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rubric_id')->unsigned();
            $table->bigInteger('skill_id')->unsigned();
            $table->timestamps();

            $table->foreign('rubric_id', 'fk_rubc_skl_scr_rubric_id')
                ->references('id')
                ->on('rubric')
                ->onDelete('cascade')
                ->onUpdate('no action');
            
            $table->foreign('skill_id', 'fk_rubc_skl_scr_skill_id')
                ->references('id')
                ->on('skill')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['rubric_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubric_skill');
    }
}
