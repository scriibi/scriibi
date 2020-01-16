<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('user_Id');
            $table->string('name', 45);
            // $table->string('teacher_First_Name' ,45);
            // $table->string('teacher_Last_Name' ,45);
            $table->string('teacher_Email', 45);
            $table->string('sub')->unique();
            $table->rememberToken();
            $table->timestamps();

            $table->unique('user_Id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
