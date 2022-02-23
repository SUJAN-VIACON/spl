<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {

            $table->id();
            $table->string('question')->nullable();
            $table->string('question_image')->nullable();
            $table->json('options')->nullable();
            $table->integer('answer')->nullable();
            $table->integer('marks')->nullable();
            $table->foreignId('exam_event_id')->nullable()->constrained('exam_events');

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
        Schema::dropIfExists('questions');
    }
}
