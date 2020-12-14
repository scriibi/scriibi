<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumSchoolTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_school_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('curriculum_id')->unsigned();
            $table->bigInteger('school_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('curriculum_id', 'fk_curr_scl_type_scr_curriculum')
                ->references('id')
                ->on('curriculum')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('school_type_id', 'fk_curr_scl_type_scr_school_type')
                ->references('id')
                ->on('school_type')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['curriculum_id', 'school_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_school_type');
    }
}
