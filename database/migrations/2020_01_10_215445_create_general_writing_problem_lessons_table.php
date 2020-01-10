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
            $table->bigIncrements('lessons_categories_Id');
            $table->bigInteger('lessons_lesson_Id')->unsigned();
            $table->bigInteger('categories_lesson_categories_Id')->unsigned();

            $table->unique('lessons_categories_Id');
            $table->index('lessons_lesson_Id');
            $table->index('categories_lesson_categories_Id', 'general_writing_problem_lessons_categories_lesson_cat_id_index');

            $table->foreign('lessons_lesson_Id')
                ->references('lesson_Id')
                ->on('lessons')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('categories_lesson_categories_Id', 'general_writing_problem_lessons_categories_lesson_cat_id_foreign')
                ->references('lesson_categories_Id')
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
