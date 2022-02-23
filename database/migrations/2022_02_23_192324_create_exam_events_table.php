<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->nullable()->constrained('classes');
            $table->foreignId('board_id')->nullable()->constrained('boards');
            $table->foreignId('course_id')->nullable()->constrained('courses');
            $table->foreignId('subject_id')->nullable()->constrained('subjects');
            $table->foreignId('notification_id')->nullable()->constrained('notifications');
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
        Schema::dropIfExists('exam_events');
    }
}
