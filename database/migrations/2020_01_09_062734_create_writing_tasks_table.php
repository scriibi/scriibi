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
        Schema::create('writing_tasks', function (Blueprint $table) {
            $table->bigIncrements('writing_task_Id');
            $table->dateTime('created_Date');
            $table->string('writing_Task_Description', 100);
            $table->bigInteger('created_By_Teacher_User_Id')->unsigned();
            $table->bigInteger('teaching_period_Id')->unsigned();
            $table->string('task_name', 45);
            $table->unique('writing_task_Id');
            $table->index('created_By_Teacher_User_Id');
            $table->index('teaching_period_Id');

            $table->foreign('created_By_Teacher_User_Id')
                ->references('user_Id')
                ->on('teachers')
                ->onDelete('no action')
                ->onUpdate('no action');
                
            $table->foreign('teaching_period_Id')
                ->references('teaching_period_Id')
                ->on('teaching_periods')
                ->onDelete('no action')
                ->onUpdate('no action');
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
        Schema::dropIfExists('writing_tasks');
    }
}