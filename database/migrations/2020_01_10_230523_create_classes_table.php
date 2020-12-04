<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('class_Id');
            $table->string('class_Name', 45)->nullable();
            $table->bigInteger('schools_school_Id')->unsigned()->nullable();

            $table->unique('class_Id');
            $table->index('schools_school_Id');

            $table->foreign('schools_school_Id')
                ->references('school_Id')
                ->on('schools')
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
        Schema::dropIfExists('classes');
    }
}
