<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admissions', function (Blueprint $table) {
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

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admissions', function (Blueprint $table) {
            //
        });
    }
}
