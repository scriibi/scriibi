<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificWritingProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specific_writing_problems', function (Blueprint $table) {
            $table->bigIncrements('specific_writing_problem_Id');
            $table->string('specific_problem_name', 45);

            $table->unique('specific_writing_problem_Id');
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
        Schema::dropIfExists('specific_writing_problems');
    }
}
