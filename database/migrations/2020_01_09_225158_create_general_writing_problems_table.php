<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralWritingProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_writing_problems', function (Blueprint $table) {
            $table->bigIncrements('lesson_categories_Id');
            $table->string('lesson_category_Name', 45);

            $table->unique('lesson_categories_Id');
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
