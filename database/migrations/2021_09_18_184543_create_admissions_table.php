<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('studentname');
            $table->string('guardianname');
            $table->string('dateofbirth');
            $table->integer('class');
            $table->string('board');
            $table->string('email');
            $table->string('studentnumber');
            $table->string('guardiannumber');
            $table->string('course');
            $table->string('subjects');
            $table->string('image');

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
        Schema::dropIfExists('admissions');
    }
}
