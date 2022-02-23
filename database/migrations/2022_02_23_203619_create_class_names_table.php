<?php

use App\Models\ClassName;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_names', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function fillData()
    {

        $rows = [
            ['name' => 'Class - 7'],
            ['name' => 'Class - 8'],
            ['name' => 'Class - 9'],
            ['name' => 'Class - 10'],
            ['name' => 'Class - 11'],
            ['name' => 'Class - 12'],
        ];
        foreach ($rows as $row) {
            ClassName::create($row);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_names');
    }
}
