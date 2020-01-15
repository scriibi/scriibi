<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->bigIncrements('label_id');
            $table->bigInteger('fk_curriculum_id')->unsigned();
            $table->bigInteger('fk_local_scriibi_level')->unsigned();
            $table->string('grade_label', 45);
            $table->string('assesment_level_label', 45);

            $table->unique('label_id');
            $table->index('fk_curriculum_id');
            $table->index('fk_local_scriibi_level');

            $table->foreign('fk_curriculum_id')
                ->references('curriculum_Id')
                ->on('curriculum');

            $table->foreign('fk_local_scriibi_level')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels');
                
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
        Schema::dropIfExists('labels');
    }
}
