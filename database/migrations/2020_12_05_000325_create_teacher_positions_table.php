<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_position', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('position_id')->unsigned();
            $table->timestamps();

            $table->foreign('teacher_id', 'fk_tchr_psitn_scr_teacher_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('position_id', 'fk_tchr_psitn_scr_position_id')
                ->references('id')
                ->on('position')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['teacher_id', 'position_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_position');
    }
}
