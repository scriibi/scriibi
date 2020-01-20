<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_positions', function (Blueprint $table) {
            $table->bigIncrements('teachers_positions_Id');
            $table->bigInteger('teachers_user_Id')->unsigned();
            $table->bigInteger('positions_position_Id')->unsigned();

            $table->unique('teachers_positions_Id');
            $table->index('teachers_user_Id');
            $table->index('positions_position_Id');

            $table->foreign('teachers_user_Id')
                ->references('user_Id')
                ->on('teachers')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('positions_position_Id')
                ->references('position_Id')
                ->on('positions')
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
        Schema::dropIfExists('teachers_positions');
    }
}
