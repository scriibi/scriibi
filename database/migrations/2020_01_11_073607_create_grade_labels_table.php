<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeLabelsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_labels', function (Blueprint $table) {
            $table->bigIncrements('grade_label_id');
            $table->bigInteger('fk_school_type_id')->unsigned();
            $table->bigInteger('fk_scriibi_level_id')->unsigned();
            $table->string('grade_label', 45);

            $table->unique('grade_label_id');
            $table->index('fk_school_type_id');

            $table->foreign('fk_school_type_id')
                ->references('school_type_id')
                ->on('school_types');

            $table->foreign('fk_scriibi_level_id')
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
        Schema::dropIfExists('grade_labels');
    }
}
