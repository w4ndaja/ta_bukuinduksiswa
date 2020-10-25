<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function validateForm()
    {
        request()->validate([
            'kelas' => 'required',
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'anak_ke' => 'required',
            'jml_sdr' => 'required',
            'status_kel' => 'required',
            'bhs' => 'required',
            'alamat' => 'required',
            'no_telepon_siswa' => 'required',
            'tinggal_dengan' => 'required',
            'jarak_tmpttinggal_drskh' => 'required',
            'gol_darah' => 'required',
            'penyakit_ygprnh_diderita' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'lulusan_dari' => 'required',
            'th_ijazah' => 'required',
            'no_ijazah_sd' => 'required',
            'no_skhu' => 'required',
            'pindahan_dari' => 'required',
            'diterima_dkls' => 'required',
            'tgl_diterima' => 'required',
            'hobi_siswa' => 'required',
            'alasankeluar_sekolah' => 'required',
            'tamat_belajar' => 'required',
            'no_ijazah' => 'required',
            'no_skhu' => 'required',
        ]);
    }

    public function getForm()
    {
        return request()->only(
            'kelas',
            'nis',
            'nama_siswa',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'agama',
            'kewarganegaraan',
            'anak_ke',
            'jml_sdr',
            'status_kel',
            'bhs',
            'alamat',
            'no_telepon_siswa',
            'tinggal_dengan',
            'jarak_tmpttinggal_drskh',
            'gol_darah',
            'penyakit_ygprnh_diderita',
            'tinggi_badan',
            'berat_badan',
            'lulusan_dari',
            'th_ijazah',
            'no_ijazah_sd',
            'no_skhu',
            'pindahan_dari',
            'diterima_dkls',
            'tgl_diterima',
            'hobi_siswa',
            'alasankeluar_sekolah',
            'tamat_belajar',
            'no_ijazah',
            'no_skhu',
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.students.table');
    }

    public function report()
    {
        return view('pages.students.report');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
