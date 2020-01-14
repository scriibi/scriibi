<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralWritingProblemLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_writing_problem_lessons', function (Blueprint $table) {
            $table->bigIncrements('lessons_general_writing_problem_Id');
            $table->bigInteger('lessons_lesson_Id')->unsigned();
            $table->bigInteger('general_writing_problems_Id')->unsigned();

            $table->unique('lessons_general_writing_problem_Id', 'lessons-general');

            $table->index('lessons_lesson_Id');
            $table->index('general_writing_problems_Id', 'lessons-general-index');


            $table->foreign('lessons_lesson_Id')
                ->references('lesson_Id')
                ->on('lessons')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('general_writing_problems_Id', 'lessons-general-fk')
                ->references('general_writing_problems_Id')
                ->on('general_writing_problems')
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
        Schema::dropIfExists('general_writing_problem_lessons');
    }
}
