<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsLevelsStrategiesTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_levels_strategies', function (Blueprint $table) {
            $table->bigIncrements('skills_levels_strategies_Id');
            $table->bigInteger('skills_levels_Id')->unsigned();
            $table->bigInteger('strategies_Id')->unsigned();

            $table->unique('skills_levels_strategies_Id', 'skills_levels_strategies_Id');


            $table->foreign('skills_levels_Id', 'fk_skills-levels-strategies_scr-skills-levels2')
            ->references('skills_levels_Id')
            ->on('skills_levels')
            ->onDelete('NO ACTION')
            ->onUpdate('NO ACTION');

            $table->foreign('strategies_Id', 'fk_skills-levels-strategies-strategies1')
            ->references('strategies_Id')
            ->on('strategies')
            ->onDelete('NO ACTION')
            ->onUpdate('NO ACTION');

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
        Schema::dropIfExists('skills_levels_strategies');
    }
}
