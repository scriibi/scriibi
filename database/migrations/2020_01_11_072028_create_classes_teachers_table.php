<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_teachers', function (Blueprint $table) {
            $table->bigIncrements('classes_teachers_Id');
            $table->bigInteger('classes_teachers_classes_class_Id')->unsigned();
            $table->bigInteger('teachers_user_Id')->unsigned();
            
            $table->unique('classes_teachers_Id');
            $table->index('classes_teachers_classes_class_Id');
            $table->index('teachers_user_Id');

            $table->foreign('classes_teachers_classes_class_Id')
                ->references('class_Id')
                ->on('classes')
                ->onDelete('no action')
                ->onUpdate('no action');
            
            $table->foreign('teachers_user_Id')
                ->references('user_Id')
                ->on('teachers')
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
        Schema::dropIfExists('classes_teachers');
    }
}
