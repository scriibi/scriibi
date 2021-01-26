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
        Schema::create('school', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable(false);
            $table->bigInteger('primary_contact')->unsigned()->nullable();
            $table->bigInteger('curriculum_school_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('primary_contact', 'fk_scl_scr_primary_contact')
                ->references('id')
                ->on('user')
                ->onDelete('set null')
                ->onUpdate('no action');
            
            $table->foreign('curriculum_school_type_id', 'fk_scl_scr_curriculum_school_type_id')
                ->references('id')
                ->on('curriculum_school_type')
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
        Schema::dropIfExists('school');
    }
}
