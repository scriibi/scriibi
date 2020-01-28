<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use DB;

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

            DB::statement("ALTER TABLE scriibi_levels AUTO_INCREMENT = 100;");
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
