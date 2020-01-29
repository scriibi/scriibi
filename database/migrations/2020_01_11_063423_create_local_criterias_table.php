<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_criterias', function (Blueprint $table) {
            $table->bigIncrements('local_criteria_Id');
            $table->string('curriculum_code', 45)->nullable();
            $table->text('description_elaboration', 1500)->nullable();

            $table->unique('local_criteria_Id');
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
        Schema::dropIfExists('local_criterias');
    }
}
