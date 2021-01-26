<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_school', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('school_id')->unsigned();
            $table->timestamps();

            $table->foreign('teacher_id', 'fk_tchr_scl_scr_teacher_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('school_id', 'fk_tchr_scl_scr_school_id')
                ->references('id')
                ->on('school')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['teacher_id', 'school_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_school');
    }
}
