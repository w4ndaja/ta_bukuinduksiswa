@extends('layouts.app')
@section('title', 'Laporan Data Siswa')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                    <li class="breadcrumb-item active">Laporan Data Siswa</li>
                </ol>
            </div>
            <h4 class="page-title">Laporan Data Siswa</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <a href="{{route('students.create')}}" class="btn btn-icon btn-info"><i class="uil-print"></i></a>
                    <a href="{{route('students.create')}}" class="btn btn-icon btn-info"><i class="uil-print"></i></a>
                </div>
                <a href="{{route('students.report')}}" class="btn btn-info">Laporan Siswa</a>
            </div>
            <div class="card-body">
                <div class="table-responsive shadow-sm">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-nowrap">No</th>
                                <th class="text-nowrap">Kelas</th>
                                <th class="text-nowrap">NIS</th>
                                <th class="text-nowrap">Nama Siswa</th>
                                <th class="text-nowrap">Jenis Kelamin</th>
                                <th class="text-nowrap">Tempat Lahir</th>
                                <th class="text-nowrap">Tanggal Lahir</th>
                                <th class="text-nowrap">Agama</th>
                                <th class="text-nowrap">Kewarganegaraan</th>
                                <th class="text-nowrap">Anak Ke</th>
                                <th class="text-nowrap">Jumlah Saudata</th>
                                <th class="text-nowrap">Status Kel</th>
                                <th class="text-nowrap">Bahasa</th>
                                <th class="text-nowrap">Alamat</th>
                                <th class="text-nowrap">No Tel Siswa</th>
                                <th class="text-nowrap">Tinggal Dengan</th>
                                <th class="text-nowrap">Jarak Tmpt Tgl Dari Skh</th>
                                <th class="text-nowrap">Gol Datah</th>
                                <th class="text-nowrap">Penyakit yg Pernah Diderita</th>
                                <th class="text-nowrap">Tinggi Badan</th>
                                <th class="text-nowrap">Berat Badan</th>
                                <th class="text-nowrap">Lulusan Dari</th>
                                <th class="text-nowrap">Tahun Ijazah</th>
                                <th class="text-nowrap">No Ijazah Sd</th>
                                <th class="text-nowrap">No SKHU</th>
                                <th class="text-nowrap">Pindahan dari</th>
                                <th class="text-nowrap">Diterima dikelas</th>
                                <th class="text-nowrap">Tgl Diterima</th>
                                <th class="text-nowrap">Hobi siswa</th>
                                <th class="text-nowrap">Alasan keluar</th>
                                <th class="text-nowrap">Tamat belajar</th>
                                <th class="text-nowrap">No Ijazah</th>
                                <th class="text-nowrap">No SKHU</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-nowrap position-sticky">1</td>
                                <td class="text-nowrap">aksjd</td>
                                <td class="text-nowrap">alksdj</td>
                                <td class="text-nowrap">lksdg</td>
                                <td class="text-nowrap">aosiureo</td>
                                <td class="text-nowrap">123kj</td>
                                <td class="text-nowrap">hhjn</td>
                                <td class="text-nowrap">uybufbghni</td>
                                <td class="text-nowrap">hmjhvdtr</td>
                                <td class="text-nowrap">5788790</td>
                                <td class="text-nowrap">ukj</td>
                                <td class="text-nowrap">hftydbnkjn</td>
                                <td class="text-nowrap">878</td>
                                <td class="text-nowrap">fghbnjnkj</td>
                                <td class="text-nowrap">hjdyfu ukh </td>
                                <td class="text-nowrap">j iygf f </td>
                                <td class="text-nowrap">uhukhkj7687 87 6</td>
                                <td class="text-nowrap">hkjh jkh</td>
                                <td class="text-nowrap">hjkjhkjh</td>
                                <td class="text-nowrap">kjhkjhfdfd fggfg</td>
                                <td class="text-nowrap">ukjkhkjuuit6756 765</td>
                                <td class="text-nowrap">jhgjghj 65</td>
                                <td class="text-nowrap">hkjhkjhj j765</td>
                                <td class="text-nowrap">76hjgj g7576 66877</td>
                                <td class="text-nowrap">jhkjhjk </td>
                                <td class="text-nowrap">kjhk h</td>
                                <td class="text-nowrap">jhkjhkjhjg ghjj</td>
                                <td class="text-nowrap"> kjhkjhk kh</td>
                                <td class="text-nowrap">kjhk </td>
                                <td class="text-nowrap">kjhkjhjk</td>
                                <td class="text-nowrap">kjhkjh</td>
                                <td class="text-nowrap">jhkhj</td>
                                <td class="text-nowrap">hkhkjhk</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <span class="text-info">Menampilkan 10 dari 100 data yang di filter</span>
                <span class="text-info">Total 200 data</span>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
