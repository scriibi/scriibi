<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralWritingProblemsTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_writing_problems', function (Blueprint $table) {
            $table->bigIncrements('general_writing_problems_Id');
            $table->string('general_writing_problem_name', 45);

            $table->unique('general_writing_problems_Id');
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
        Schema::dropIfExists('general_writing_problems');
    }
}
