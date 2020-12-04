<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTypesTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_types', function (Blueprint $table) {
            $table->bigIncrements('school_type_id');
            $table->bigInteger('fk_curriculum_id')->unsigned();
            $table->bigInteger('fk_school_type_identifier_id')->unsigned();

            $table->unique('school_type_id');
            $table->unique(['fk_curriculum_id', 'fk_school_type_identifier_id'], 'unique_school_type_identifier_id');
            $table->index('fk_curriculum_id');

            $table->foreign('fk_curriculum_id')
                ->references('curriculum_Id')
                ->on('curriculum');

            $table->foreign('fk_school_type_identifier_id', 'fk_school_type_identifier_id')
                ->references('school_type_identifier_id')
                ->on('school_type_identifiers');

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
        Schema::dropIfExists('school_types');
    }
}
