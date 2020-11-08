@extends('layouts.app')
@section('title', 'Table Data Siswa')
@section('content')
<!-- start page title -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                    <li class="breadcrumb-item active">Tabel Data Siswa</li>
                </ol>
            </div>
            <h4 class="page-title text-success">Table Data Siswa Aktif</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <a href="{{route('students.create')}}" class="btn btn-primary">Tambah Siswa</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive shadow-sm">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-nowrap">Kelas</th>
                                <th class="text-nowrap">NIS</th>
                                <th class="text-nowrap">Nama Siswa</th>
                                <th class="text-nowrap">Jenis Kelamin</th>
                                <th class="text-nowrap">Tempat Lahir</th>
                                <th class="text-nowrap">Tanggal Lahir</th>
                                <th class="text-nowrap">Agama</th>
                                <th class="text-nowrap">Kewarganegaraan</th>
                                <th class="text-nowrap">Anak Ke</th>
                                <th class="text-nowrap">Jumlah Bersaudara</th>
                                <th class="text-nowrap">Status Kel</th>
                                <th class="text-nowrap">Bahasa</th>
                                <th class="text-nowrap">Alamat</th>
                                <th class="text-nowrap">No Tel Siswa</th>
                                <th class="text-nowrap">Tinggal Dengan</th>
                                <th class="text-nowrap">Jarak Tmpt Tgl Dari Skh</th>
                                <th class="text-nowrap">Golongan Datah</th>
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
                                <th class="text-nowrap">Alasan Pindah</th>
                                <th class="text-nowrap">Tahun Lulus</th>
                                <th class="text-nowrap">No Ijazah</th>
                                <th class="text-nowrap">No SKHU</th>
                                <th class="text-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $key => $student)
                            <tr>
                                <td class="text-nowrap">{{$student->grade->code ?? ''}} - {{$student->grade->name ?? ''}}</td>
                                <td class="text-nowrap">{{$student->nis}}</td>
                                <td class="text-nowrap">{{$student->name}}</td>
                                <td class="text-nowrap">{{$student->gender}}</td>
                                <td class="text-nowrap">{{$student->birth_place}}</td>
                                <td class="text-nowrap">{{$student->birth_date}}</td>
                                <td class="text-nowrap">{{$student->religion}}</td>
                                <td class="text-nowrap">{{$student->citizenship}}</td>
                                <td class="text-nowrap">{{$student->fam_order}}</td>
                                <td class="text-nowrap">{{$student->fam_count}}</td>
                                <td class="text-nowrap">{{$student->fam_status}}</td>
                                <td class="text-nowrap">{{$student->language}}</td>
                                <td class="text-nowrap">{{$student->address}}</td>
                                <td class="text-nowrap">{{$student->phone}}</td>
                                <td class="text-nowrap">{{$student->live_with}}</td>
                                <td class="text-nowrap">{{$student->residence_distance}}</td>
                                <td class="text-nowrap">{{$student->blood_type}}</td>
                                <td class="text-nowrap">{{$student->sick_history}}</td>
                                <td class="text-nowrap">{{$student->height}}</td>
                                <td class="text-nowrap">{{$student->weight}}</td>
                                <td class="text-nowrap">{{$student->graduate_from}}</td>
                                <td class="text-nowrap">{{$student->ijazah_year}}</td>
                                <td class="text-nowrap">{{$student->ijazah_sd_no}}</td>
                                <td class="text-nowrap">{{$student->skhu_no}}</td>
                                <td class="text-nowrap">{{$student->move_from}}</td>
                                <td class="text-nowrap">{{$student->receiveAtGrade->code ?? ''}} - {{$student->receiveAtGrade->name ?? ''}}</td>
                                <td class="text-nowrap">{{$student->date_received}}</td>
                                <td class="text-nowrap">{{$student->hobby}}</td>
                                <td class="text-nowrap">{{$student->leave_reason}}</td>
                                <td class="text-nowrap">{{$student->finished_studying_at}}</td>
                                <td class="text-nowrap">{{$student->ijazah_now_no}}</td>
                                <td class="text-nowrap">{{$student->skhu_now_no}}</td>
                                <td class="text-nowrap d-flex flex-row">
                                    <a href="{{route('students.edit', $student->id)}}" class="btn btn-info ml-1 btn-sm">Edit</a>
                                    <a href="{{route('students.confirm-delete', $student->id)}}" class="btn btn-warning ml-1 btn-sm">Hapus</a>
                                    <a href="{{route('students.confirm-drop-out', $student->id)}}" class="btn btn-danger ml-1 btn-sm">Drop Out</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page title -->
@endsection
