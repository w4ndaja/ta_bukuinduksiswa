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
            $table->string('kelas');
            $table->integer('nis');
            $table->string('nama_siswa');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->integer('anak_ke');
            $table->integer('jml_sdr');
            $table->string('status_kel');
            $table->string('bhs');
            $table->string('alamat');
            $table->string('no_telepon_siswa');
            $table->string('tinggal_dengan');
            $table->string('jarak_tmpttinggal_drskh');
            $table->string('gol_darah');
            $table->string('penyakit_ygprnh_diderita');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('lulusan_dari');
            $table->string('th_ijazah');
            $table->string('no_ijazah_sd');
            $table->string('no_skhu');
            $table->string('pindahan_dari');
            $table->string('diterima_dkls');
            $table->date('tgl_diterima');
            $table->string('hobi_siswa');
            $table->string('alasankeluar_sekolah');
            $table->date('tamat_belajar');
            $table->string('no_ijazah_sekarang');
            $table->string('no_skhu_sekarang');
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
