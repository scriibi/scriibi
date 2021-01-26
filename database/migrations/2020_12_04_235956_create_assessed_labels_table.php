<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessedLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessed_label', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label', 45)->nullable(false);
            $table->bigInteger('curriculum_school_type_id')->unsigned();
            $table->bigInteger('scriibi_level_id')->unsigned();
            $table->timestamps();

            $table->foreign('curriculum_school_type_id', 'fk_assd_lbl_scr_curriculum_school_type')
                ->references('id')
                ->on('curriculum_school_type')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('scriibi_level_id', 'fk_assd_lbl_scr_scriibi_level')
                ->references('id')
                ->on('scriibi_level')
                ->onDelete('no action')
                ->onUpdate('no action');
            
            $table->index(['curriculum_school_type_id', 'scriibi_level_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessed_label');
    }
}
