<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScriibiRubricsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scriibi_rubrics', function (Blueprint $table) {
            $table->bigIncrements('scriibi_rubrics_id');
            $table->bigInteger('rubric_id')->unsigned();
            $table->bigInteger('curriculum_id')->unsigned();
            $table->bigInteger('school_type_identifier_id')->unsigned();
            $table->unique('scriibi_rubrics_id');

            $table->foreign('rubric_id')
                ->references('rubric_Id')
                ->on('rubrics')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('curriculum_id')
                ->references('curriculum_Id')
                ->on('curriculum')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('school_type_identifier_id')
                ->references('school_type_identifier_id')
                ->on('school_type_identifiers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('scriibi_rubrics');
    }
}
