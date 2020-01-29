<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('school_Id');
            $table->string('name', 45);
            $table->bigInteger('primary_Contact_Id')->unsigned()->nullable();
            $table->bigInteger('curriculum_details_curriculum_details_Id')->unsigned();
            $table->bigInteger('school_type_id')->unsigned();
            $table->unique('school_Id');

            $table->foreign('primary_Contact_Id')
                ->references('user_Id')
                ->on('teachers')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('curriculum_details_curriculum_details_Id')
                ->references('curriculum_Id')
                ->on('curriculum')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('school_type_id')
                ->references('school_type_id')
                ->on('school_types')
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
        Schema::dropIfExists('schools');
    }
}
