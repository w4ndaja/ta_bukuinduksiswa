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
            $table->foreignId('grade_id');
            $table->integer('nis');
            $table->string('name');
            $table->string('gender');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('religion');
            $table->string('citizenship');
            $table->integer('fam_order');
            $table->integer('fam_count');
            $table->string('fam_status');
            $table->string('language');
            $table->text('address');
            $table->string('phone');
            $table->string('live_with');
            $table->string('residence_distance');
            $table->string('blood_type');
            $table->string('sick_history');
            $table->integer('height');
            $table->integer('weight');
            $table->string('graduate_from');
            $table->string('ijazah_year');
            $table->string('ijazah_sd_no');
            $table->string('skhu_no');
            $table->string('move_from');
            $table->foreignId('receive_at_grade_id');
            $table->date('date_received');
            $table->string('hobby');
            $table->string('leave_reason');
            $table->date('finished_studying_at');
            $table->string('ijazah_now_no');
            $table->string('skhu_now_no');
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
