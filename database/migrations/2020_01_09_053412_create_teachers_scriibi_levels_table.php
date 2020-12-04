<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersScriibiLevelsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_scriibi_levels', function (Blueprint $table) {
            $table->bigIncrements('teachers_scriibi_levels_Id');
            $table->bigInteger('teachers_user_Id')->unsigned();
            $table->bigInteger('scriibi_levels_scriibi_Level_Id')->unsigned();

            $table->unique('teachers_scriibi_levels_Id');
            $table->index('teachers_user_Id');
            $table->index('scriibi_levels_scriibi_Level_Id');

            $table->foreign('teachers_user_Id')
                ->references('user_Id')
                ->on('teachers')
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
        Schema::dropIfExists('teachers_scriibi_levels');
    }
}
