<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_class', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('class_id')->unsigned();
            $table->string('status_flag', 10)->nullable(false);
            $table->timestamps();

            $table->foreign('teacher_id', 'fk_tchr_cls_scr_teacher_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('class_id', 'fk_tchr_cls_scr_class_id')
                ->references('id')
                ->on('class')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['teacher_id', 'class_id', 'status_flag']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_class');
    }
}
