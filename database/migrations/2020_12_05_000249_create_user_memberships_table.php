<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_membership', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('membership_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id', 'fk_usr_membrshp_scr_user_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('membership_id', 'fk_usr_membrshp_scr_membership_id')
                ->references('id')
                ->on('membership')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['user_id', 'membership_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_membership');
    }
}
