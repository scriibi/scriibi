<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('skill_id')->unsigned();
            $table->bigInteger('scriibi_level_id')->unsigned();
            $table->timestamps();

            $table->foreign('skill_id', 'fk_skl_lvl_scr_skill_id')
                ->references('id')
                ->on('skill')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('scriibi_level_id', 'fk_skl_lvl_scr_scriibi_level_id')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['skill_id', 'scriibi_level_id']);
            $table->index(['scriibi_level_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_level');
    }
}
