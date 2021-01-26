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
    {
        Schema::create('curriculum_scriibi_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('local_label')->nullable(false);
            $table->bigInteger('curriculum_id')->unsigned();
            $table->bigInteger('local_scriibi_level')->unsigned();
            $table->bigInteger('global_scriibi_level')->unsigned();
            $table->timestamps();

            $table->foreign('curriculum_id', 'fk_curr_scrb_lvl_scr_curriculum')
                ->references('id')
                ->on('curriculum')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('local_scriibi_level', 'fk_curr_scrb_lvl_scr_local_scriibi_level')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('global_scriibi_level', 'fk_curr_scrb_lvl_scr_global_scriibi_level')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
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
        Schema::dropIfExists('curriculum_scriibi_level');
    }
}
