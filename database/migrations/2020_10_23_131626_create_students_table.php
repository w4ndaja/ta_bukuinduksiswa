<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grade_id')->nullable();
            $table->integer('nis')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('religion')->nullable();
            $table->string('citizenship')->nullable();
            $table->integer('fam_order')->nullable();
            $table->integer('fam_count')->nullable();
            $table->string('fam_status')->nullable();
            $table->string('language')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('live_with')->nullable();
            $table->string('residence_distance')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('sick_history')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('graduate_from')->nullable();
            $table->string('ijazah_year')->nullable();
            $table->string('ijazah_sd_no')->nullable();
            $table->string('skhu_no')->nullable();
            $table->string('move_from')->nullable();
            $table->foreignId('receive_at_grade_id')->nullable();
            $table->date('date_received')->nullable();
            $table->string('hobby')->nullable();
            $table->string('leave_reason')->nullable();
            $table->date('finished_studying_at')->nullable();
            $table->string('ijazah_now_no')->nullable();
            $table->string('skhu_now_no')->nullable();
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
        Schema::dropIfExists('students');
    }
}
