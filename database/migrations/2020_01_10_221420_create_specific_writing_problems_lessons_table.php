<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificWritingProblemsLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specific_writing_problems_lessons', function (Blueprint $table) {
            $table->bigIncrements('specific_writing_problem_lesson_Id');
            $table->bigInteger('lessons_lesson_Id')->unsigned();
            $table->bigInteger('specific_writing_problem_specific_writing_problem_Id')->unsigned();

            $table->foreign('lessons_lesson_Id')
                ->references('lesson_Id')
                ->on('lessons')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('specific_writing_problem_specific_writing_problem_Id', 'spec_writ_probs_lessons_spec_writ_prob_spec_writ_prob_id_fk')
                ->references('specific_writing_problem_Id')
                ->on('specific_writing_problems')
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
        Schema::dropIfExists('specific_writing_problems_lessons');
    }
}
