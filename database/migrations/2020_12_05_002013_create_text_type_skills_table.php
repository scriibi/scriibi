<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextTypeSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_type_skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('text_type_id')->unsigned();
            $table->bigInteger('skill_id')->unsigned();
            $table->timestamps();

            $table->foreign('text_type_id', 'fk_txt_typ_skl_scr_text_type_id')
                ->references('id')
                ->on('text_type')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('skill_id', 'fk_txt_typ_skl_scr_skill_id')
                ->references('id')
                ->on('skill')
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
        Schema::dropIfExists('text_type_skill');
    }
}
