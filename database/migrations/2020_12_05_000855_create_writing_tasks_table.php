<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWritingTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing_task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable(false);
            $table->text('description')->nullable();
            $table->date('assessed_date')->nullable(false);
            $table->bigInteger('primary_owner_id')->nullable(true)->unsigned();
            $table->integer('group_count')->nullable();
            $table->bigInteger('school_id')->unsigned();
            $table->bigInteger('teaching_period_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->timestamps();

            $table->foreign('primary_owner_id', 'fk_wrt_tsk_scr_primary_owner_id')
                ->references('id')
                ->on('user')
                ->onDelete('set null')
                ->onUpdate('no action');

            $table->foreign('school_id', 'fk_wrt_tsk_scr_school_id')
                ->references('id')
                ->on('school')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('teaching_period_id', 'fk_wrt_tsk_scr_teaching_period_id')
                ->references('id')
                ->on('teaching_period')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('status_id', 'fk_wrt_tsk_scr_status_id')
                ->references('id')
                ->on('status')
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
        Schema::dropIfExists('writing_task');
    }
}
