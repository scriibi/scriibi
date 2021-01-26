<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 255)->nullable(false);
            $table->string('last_name', 255)->nullable(false);
            $table->string('gov_id', 45)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('school_mgt_sys_id', 45)->nullable();
            $table->bigInteger('grade_level_id')->unsigned();
            $table->bigInteger('assessed_level_id')->unsigned();
            $table->bigInteger('school_id')->unsigned();
            $table->timestamps();

            $table->foreign('grade_level_id', 'fk_stdnt_scr_grade_level_id')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('assessed_level_id', 'fk_stdnt_scr_assessed_level_id')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('school_id', 'fk_stdnt_scr_school_id')
                ->references('id')
                ->on('school')
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
        Schema::dropIfExists('student');
    }
}
