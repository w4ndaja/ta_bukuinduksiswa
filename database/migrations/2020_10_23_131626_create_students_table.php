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
            $table->string('kelas', 3);
            $table->integer('nis', 5);
            $table->string('nama_siswa', 35);
            $table->string('jenis_kelamin', 1);
            $table->string('tempat_lahir', 15);
            $table->date('tanggal_lahir');
            $table->string('agama', 12);
            $table->string('kewarganegaraan', 3);
            $table->integer('anak_ke', 2);
            $table->integer('jml_sdr', 2);
            $table->string('status_kel', 7);
            $table->string('bhs', 10);
            $table->string('alamat', 50);
            $table->string('no_telepon_siswa', 12);
            $table->string('tinggal_dengan', 9);
            $table->string('jarak_tmpttinggal_drskh', 4);
            $table->string('gol_darah', 4);
            $table->string('penyakit_ygprnh_diderita', 15);
            $table->integer('tinggi_badan', 3);
            $table->integer('berat_badan', 3);
            $table->string('lulusan_dari', 25);
            $table->string('th_ijazah', 4);
            $table->string('no_ijazah_sd', 12);
            $table->string('no_skhu', 12);
            $table->string('pindahan_dari', 25);
            $table->string('diterima_dkls', 3);
            $table->date('tgl_diterima');
            $table->string('hobi_siswa', 25);
            $table->string('alasankeluar_sekolah', 8);
            $table->date('tamat_belajar');
            $table->string('no_ijazah_sekarang', 12);
            $table->string('no_skhu_sekarang', 12);
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
