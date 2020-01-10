<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextTypesSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_types_skills', function (Blueprint $table) {
            $table->bigIncrements('text_types_skills_Id');
            $table->bigInteger('text_types_skills_text_type_Id')->unsigned();
            $table->bigInteger('text_types_skills_skill_Id')->unsigned();

            $table->unique('text_types_skills_Id');
            $table->index('text_types_skills_text_type_Id');
            $table->index('text_types_skills_skill_Id');

            $table->foreign('text_types_skills_text_type_Id')
                ->references('text_type_Id')
                ->on('text_types')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('text_types_skills_skill_Id')
                ->references('skill_Id')
                ->on('skills')
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
        Schema::dropIfExists('text_types_skills');
    }
}
