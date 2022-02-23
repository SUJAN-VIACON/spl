<?php

use App\Models\Course;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $this->fillData();
    }

    public function fillData()
    {

        $rows = [
            ['name' => 'BOARD'],
            ['name' => 'NURSING'],
            ['name' => 'JEE'],
            ['name' => 'NEET'],
            ['name' => 'PHARMACY'],
            ['name' => 'JEXPO'],
            ['name' => 'OTHER'],
        ];
        foreach ($rows as $row) {
            Course::create($row);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
