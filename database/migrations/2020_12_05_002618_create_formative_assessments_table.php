<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormativeAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formative_assessment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable(false);
            $table->bigInteger('class_id')->unsigned();
            $table->bigInteger('teaching_period_id')->unsigned();
            $table->timestamps();

            $table->foreign('class_id', 'fk_form_asse_scr_class_id')
                ->references('id')
                ->on('class')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('teaching_period_id', 'fk_form_asse_scr_teaching_period_id')
                ->references('id')
                ->on('teaching_period')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formative_assessment');
    }
}
