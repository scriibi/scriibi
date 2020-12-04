<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormativeAssessmentsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formative_assessments', function (Blueprint $table) {
            $table->bigIncrements('formative_assessment_Id');
            $table->string('assessment_name', 45);
            $table->bigInteger('created_by')->unsigned();
            $table->bigInteger('teaching_period')->unsigned();

            
            $table->unique('formative_assessment_Id');
            $table->index('created_by');
            $table->index('teaching_period');

            $table->foreign('created_by')
                ->references('user_Id')
                ->on('teachers')
                ->onDelete('no action')
                ->onUpdate('no action');
        
            $table->foreign('teaching_period')
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
        Schema::dropIfExists('formative_assessments');
    }
}
