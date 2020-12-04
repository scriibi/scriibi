<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RubricsTeachersTableRubricIdFieldOnDeleteCascade extends Migration
{// ################################################################################# older model file (delete later) ########################################################################################
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rubrics_teachers', function (Blueprint $table) {
            $table->dropForeign(['rubrics_rubric_Id']);
            $table->foreign('rubrics_rubric_Id')
                ->references('rubric_Id')
                ->on('rubrics')
                ->onDelete('cascade')
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
        //
    }
}
