<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrics', function (Blueprint $table) {
            $table->bigIncrements('rubric_Id');
            $table->bigInteger('scriibi_levels_scriibi_level_Id')->unsigned();
            $table->string('rubric_Name', 45);

            $table->unique('rubric_Id');

            $table->foreign('scriibi_levels_scriibi_level_Id')
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
        Schema::dropIfExists('rubrics');
    }
}
