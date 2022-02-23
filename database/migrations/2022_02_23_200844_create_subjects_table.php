<?php

use App\Models\Subject;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $this->filldata();
    }

    public function filldata()
    {
        $rows = [
            ['name' => 'English'],
            ['name' => 'Hindi'],
            ['name' => 'Maths'],
            ['name' => 'Science'],
            ['name' => 'Social Science'],
            ['name' => 'Sanskrit'],
            ['name' => 'Computer Science'],
            ['name' => 'Physics'],
            ['name' => 'Chemistry'],
            ['name' => 'Biology'],
            ['name' => 'Accounts'],
            ['name' => 'Economics'],
            ['name' => 'Political Science'],
            ['name' => 'History'],
            ['name' => 'Geography'],
            ['name' => 'Psychology'],
            ['name' => 'Commerce'],
        ];

        foreach ($rows as $row) {
            Subject::create($row);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
