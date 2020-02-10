<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentTableGovIdFieldSetToNotUnique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('not_unique', function (Blueprint $table) {
            Schema::table('students', function (Blueprint $table) {
                $table->dropUnique(['Student_Gov_Id']);
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
        Schema::table('not_unique', function (Blueprint $table) {
            Schema::table('students', function (Blueprint $table) {
                $table->unique('Student_Gov_Id');
            });
        });
    }
}
