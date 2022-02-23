<?php

use App\Models\Board;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $this->fillData();
    }

    public function fillData()
    {

        $rows = [
            ['name' => 'WBBSE'],
            ['name' => 'WBCHSE'],
            ['name' => 'ICSC'],
            ['name' => 'ISC'],
            ['name' => 'CBSE'],
        ];
        foreach ($rows as $row) {
            Board::create($row);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
}
