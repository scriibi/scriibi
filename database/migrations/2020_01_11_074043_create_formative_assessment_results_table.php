<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormativeAssessmentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formative_assessment_results', function (Blueprint $table) {
            $table->bigIncrements('formative_assessment_results_Id');
            $table->bigInteger('classes_students_classes_students_Id')->unsigned();
            $table->bigInteger('formative_assessments_formative_assessment_Id')->unsigned();
            $table->integer('result');

             
            $table->unique('formative_assessment_results_Id', 'formative_assessment_results_Id_UNIQUE');
            $table->index('classes_students_classes_students_Id', 'fk_formative_assessment_results_classes_students1_idx');
            $table->index('formative_assessments_formative_assessment_Id', 'fk_formative_assessment_results_formative_assessments1_idx');

            $table->foreign('classes_students_classes_students_Id', 'fk_formative_assessment_results_classes_tudents1')
                ->references('classes_students_Id')
                ->on('classes_students')
                ->onDelete('no action')
                ->onUpdate('no action');
        
            $table->foreign('formative_assessments_formative_assessment_Id', 'fk_formative_assessment_results_formative_assessments1')
                ->references('formative_assessment_Id')
                ->on('formative_assessments')
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
        Schema::dropIfExists('formative_assessment_results');
    }
}
