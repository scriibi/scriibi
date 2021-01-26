<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable(false);
            $table->string('status_flag', 10)->nullable(false);
            $table->bigInteger('school_id')->unsigned();
            $table->bigInteger('teaching_period_id')->unsigned();
            $table->timestamps();

            $table->foreign('school_id', 'fk_cls_scr_school_id')
                ->references('id')
                ->on('school')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('teaching_period_id', 'fk_cls_scr_teaching_period_id')
                ->references('id')
                ->on('teaching_period')
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
        Schema::dropIfExists('class');
    }
}
