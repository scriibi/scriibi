<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsScriibiLevelsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons_scriibi_levels', function (Blueprint $table) {
            $table->bigIncrements('lessons_scriibi_levels_Id');
            $table->bigInteger('lessons_lesson_Id')->unsigned();
            $table->bigInteger('scriibi_levels_scriibi_Level_Id')->unsigned();

            $table->unique('lessons_scriibi_levels_Id');
            $table->index('lessons_lesson_Id');
            $table->index('scriibi_levels_scriibi_Level_Id');

            $table->foreign('lessons_lesson_Id')
                ->references('lesson_Id')
                ->on('lessons')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('scriibi_levels_scriibi_Level_Id')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
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
        Schema::dropIfExists('lessons_scriibi_levels');
    }
}
