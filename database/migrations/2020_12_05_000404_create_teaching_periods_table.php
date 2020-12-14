<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachingPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_period', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->year('year')->nullable(false);
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->bigInteger('curriculum_school_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('curriculum_school_type_id', 'fk_tchng_prd_scr_curriculum_school_type_id')
                ->references('id')
                ->on('curriculum_school_type')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(['curriculum_school_type_id', 'year', 'end_date', 'start_date'], 'techin_prd_curr_scl_typ_id_yr_end_start_dt_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teaching_period');
    }
}
