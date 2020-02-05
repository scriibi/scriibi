<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentTableEnrolledLevelSetToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nullable', function (Blueprint $table) {
            Schema::table('students', function (Blueprint $table) {
                $table->bigInteger('enrolled_Level_Id')->unsigned()->nullable()->change();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nullable', function (Blueprint $table) {
            $table->bigInteger('enrolled_Level_Id')->unsigned();
        });
    }
}
