<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->bigIncrements('goal_Id');
            $table->bigInteger('skills_levels_skills_levels_Id')->unsigned();
            $table->bigInteger('classes_students_classes_students_Id')->unsigned();

            $table->unique('goal_Id');
            $table->index('skills_levels_skills_levels_Id');
            $table->index('classes_students_classes_students_Id');
            
            $table->foreign('classes_students_classes_students_Id')
                ->references('classes_students_Id')
                ->on('classes_students')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('skills_levels_skills_levels_Id')
                ->references('skills_levels_Id')
                ->on('skills_levels')
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
        Schema::dropIfExists('goals');
    }
}
