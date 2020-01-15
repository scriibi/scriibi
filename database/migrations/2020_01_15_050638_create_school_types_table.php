<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_types', function (Blueprint $table) {
            $table->bigIncrements('school_type_id');
            $table->bigInteger('fk_curriculum_id')->unsigned();
            $table->string('type_name', 45);

            $table->unique('school_type_id');
            $table->index('fk_curriculum_id');

            $table->foreign('fk_curriculum_id')
                ->references('curriculum_Id')
                ->on('curriculum');

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
        Schema::dropIfExists('school_types');
    }
}
