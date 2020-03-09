<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WritingTaskStudentsCommentFieldSetToText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('writting_task_students', function (Blueprint $table) {
            $table->text('comment')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('writting_task_students', function (Blueprint $table) {
            $table->string('comment', 45)->nullable();
        });
    }
}
