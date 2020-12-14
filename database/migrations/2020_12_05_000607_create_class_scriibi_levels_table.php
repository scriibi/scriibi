<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassScriibiLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_scriibi_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('class_id')->unsigned();
            $table->bigInteger('scriibi_level_id')->unsigned();
            $table->timestamps();

            $table->foreign('class_id', 'fk_cls_scrb_lvl_scr_class_id')
                ->references('id')
                ->on('class')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('scriibi_level_id', 'fk_cls_scrb_lvl_scr_scriibi_level_id')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['class_id', 'scriibi_level_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_scriibi_level');
    }
}
