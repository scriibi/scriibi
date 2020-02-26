<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RubricNameCharCountIncreased extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rubrics', function (Blueprint $table) {
            $table->string('rubric_Name', 250)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rubrics', function (Blueprint $table) {
            $table->string('rubric_Name', 45)->change();
        });
    }
}
