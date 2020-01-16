<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTypeIdentifiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_type_identifiers', function (Blueprint $table) {
            $table->bigIncrements('school_type_identifier_id');
            $table->string('school_type_identifier_name', 45);
            $table->string('school_type_identifier_description', 45);

            $table->unique('school_type_identifier_id');
            $table->index('school_type_identifier_name');

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
        Schema::dropIfExists('school_type_identifiers');
    }
}
