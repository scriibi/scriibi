<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_lessons', function (Blueprint $table) {
            $table->bigIncrements('teachers_lessons_Id');
            $table->bigInteger('lessons_lesson_Id')->unsigned();
            $table->bigInteger('teachers_user_Id')->unsigned();
            $table->tinyInteger('favourite_flag');
            $table->tinyInteger('completed_flag');

            $table->unique('teachers_lessons_Id');
            $table->index('lessons_lesson_Id');
            $table->index('teachers_user_Id');

            $table->foreign('lessons_lesson_Id')
                ->references('lesson_Id')
                ->on('lessons')
                ->onDelete('no action')
                ->onUpdate('no action');
        
            $table->foreign('teachers_user_Id')
                ->references('user_Id')
                ->on('teachers')
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
        Schema::dropIfExists('teachers_lessons');
    }
}
