<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_values', function (Blueprint $table) {
            $table->id();
            $table->year('school_year')->nullable();
            $table->foreignId('grade_id')->nullable();
            $table->foreignId('nis')->nullable();
            $table->integer('semester')->nullable();
            $table->foreignId('subject_id')->nullable();
            $table->double('value')->nullable();
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
        Schema::dropIfExists('lesson_values');
    }
}
