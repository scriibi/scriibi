<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScriibiLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scriibi_levels', function (Blueprint $table) {
            $table->bigIncrements('scriibi_Level_Id');
            $table->double('scriibi_Level');
            $table->timestamps();

            $table->unique('scriibi_Level_Id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scriibi_levels');
    }
}
