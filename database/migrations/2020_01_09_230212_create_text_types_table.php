<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_types', function (Blueprint $table) {
            $table->bigIncrements('text_type_Id');
            $table->string('text_type_Name', 45);
            $table->string('text_type_Desc', 200);

            $table->unique('text_type_Id');
            $table->unique('text_type_Name');

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
        Schema::dropIfExists('text_types');
    }
}
