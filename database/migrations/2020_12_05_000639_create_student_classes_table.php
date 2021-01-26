<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_class', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('class_id')->unsigned();
            $table->string('status_flag', 10)->nullable(false);
            $table->timestamps();

            $table->foreign('student_id', 'fk_stdnt_cls_scr_student_id')
                ->references('id')
                ->on('student')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('class_id', 'fk_stdnt_cls_scr_class_id')
                ->references('id')
                ->on('class')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['student_id', 'class_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_class');
    }
}
