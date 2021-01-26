<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherScriibiLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_scriibi_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('scriibi_level_id')->unsigned();
            $table->timestamps();

            $table->foreign('teacher_id', 'fk_tchr_scrb_lvl_scr_teacher_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('scriibi_level_id', 'fk_tchr_scrb_lvl_scr_scriibi_level_id')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['teacher_id', 'scriibi_level_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_scriibi_level');
    }
}
