<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricsTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrics_teachers', function (Blueprint $table) {
            $table->bigIncrements('rubrics_teachers_Id');
            $table->bigInteger('rubrics_rubric_Id')->unsigned();
            $table->bigInteger('teachers_user_Id')->unsigned();

            $table->unique('rubrics_teachers_Id');


            $table->foreign('teachers_user_Id')
            ->references('user_Id')
            ->on('teachers')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->foreign('rubrics_rubric_Id')
            ->references('rubric_Id')
            ->on('rubrics')
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
        Schema::dropIfExists('rubrics_teachers');
    }
}
