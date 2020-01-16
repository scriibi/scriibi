<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessedLevelLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessed_level_labels', function (Blueprint $table) {
            $table->bigIncrements('assessed_level_label_id');
            $table->bigInteger('school_type_id_fk')->unsigned();
            $table->bigInteger('school_scriibi_level_id')->unsigned();
            $table->string('assessed_level_label', 45);

            $table->unique('assessed_level_label_id');
            $table->index('school_type_id_fk');

            $table->foreign('school_type_id_fk')
                ->references('school_type_id')
                ->on('school_types');
                
            $table->foreign('school_scriibi_level_id')
                ->references('scriibi_Level_Id')
                ->on('scriibi_levels');
                

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
        Schema::dropIfExists('assessed_level_labels');
    }
}
