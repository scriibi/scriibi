<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillLevelStrategiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_level_strategy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('skill_level_id')->unsigned();
            $table->bigInteger('strategy_id')->unsigned();
            $table->timestamps();

            $table->foreign('skill_level_id', 'fk_skl_lvl_strat_scr_skill_level_id')
                ->references('id')
                ->on('skill_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('strategy_id', 'fk_skl_lvl_strat_scr_strategy_id')
                ->references('id')
                ->on('strategy')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->index(['skill_level_id', 'strategy_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_level_strategy');
    }
}
