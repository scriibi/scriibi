<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WritingTaskNameCharCountIncreased extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('writing_tasks', function (Blueprint $table) {
            $table->string('task_name', 250)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('writing_tasks', function (Blueprint $table) {
            $table->string('task_name', 45)->change();
        });
    }
}
