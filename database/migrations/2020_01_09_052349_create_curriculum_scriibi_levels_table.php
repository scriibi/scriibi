<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumScriibiLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {// ################################################################################# older model file (delete later) ########################################################################################
        Schema::create('curriculum_scriibi_levels', function (Blueprint $table) {
            $table->bigIncrements('curriculum_scriibi_levels_Id');
            $table->bigInteger('curriculum_Id')->unsigned();
            $table->bigInteger('global_level')->unsigned();
            $table->bigInteger('local_level')->unsigned();

            $table->unique('curriculum_scriibi_levels_Id');
            $table->index('local_level');
            $table->index('global_level');
            $table->index('curriculum_Id');

            $table->foreign('local_level')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
                ->onDelete('no action')
                ->onUpdate('no action');
            
            $table->foreign('global_level')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('curriculum_Id')
                ->references('curriculum_Id')
                ->on('curriculum')
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
        Schema::dropIfExists('curriculum_scriibi_levels');
    }
}
