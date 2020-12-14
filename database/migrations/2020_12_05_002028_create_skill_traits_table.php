<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillTraitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_trait', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('skill_id')->unsigned();
            $table->bigInteger('trait_id')->unsigned();
            $table->timestamps();

            $table->foreign('skill_id', 'fk_skl_trt_scr_skill_id')
                ->references('id')
                ->on('skill')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('trait_id', 'fk_skl_trt_scr_trait_id')
                ->references('id')
                ->on('trait')
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
        Schema::dropIfExists('skill_trait');
    }
}
