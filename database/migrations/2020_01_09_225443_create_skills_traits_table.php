<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTraitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_traits', function (Blueprint $table) {
            $table->bigIncrements('skills_traits_Id');
            $table->bigInteger('skills_traits_traits_trait_Id')->unsigned();
            $table->bigInteger('skills_traits_skills_skill_Id')->unsigned();

            $table->unique('skills_traits_Id');
            $table->index('skills_traits_traits_trait_Id');
            $table->index('skills_traits_skills_skill_Id');

            $table->foreign('skills_traits_traits_trait_Id')
                ->references('trait_Id')
                ->on('traits')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('skills_traits_skills_skill_Id')
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
        Schema::dropIfExists('skills_traits');
    }
}
