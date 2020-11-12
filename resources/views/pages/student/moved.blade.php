@extends('layouts.app')
@section('title', 'Table Data Siswa Keluar')
@section('content')
<!-- start page title -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                    <li class="breadcrumb-item active">Tabel Data Siswa Keluar</li>
                </ol>
            </div>
            <h4 class="page-title">
                <span class="bg-danger text-light rounded py-1 px-3">Table Data Siswa Keluar</span>
            </h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive shadow-sm">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-nowrap">NIS</th>
                                <th class="text-nowrap">Nama Siswa</th>
                                <th class="text-nowrap">Jenis Kelamin</th>
                                <th class="text-nowrap">Tempat Lahir</th>
                                <th class="text-nowrap">Tanggal Lahir</th>
                                <th class="text-nowrap">Alasan Keluar</th>
                                <th class="text-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $key => $student)
                            <tr>
                                <td class="text-nowrap">{{$student->nis}}</td>
                                <td class="text-nowrap">{{$student->name}}</td>
                                <td class="text-nowrap">{{$student->gender}}</td>
                                <td class="text-nowrap">{{$student->birth_place}}</td>
                                <td class="text-nowrap">{{$student->birth_date}}</td>
                                <td class="text-nowrap">{{$student->dropOut->out_reason}}</td>
                                <td class="text-nowrap d-flex flex-row">
                                    <a href="{{route('students.confirm-drop-in', $student->id)}}" class="btn btn-success ml-1 btn-sm">Drop In</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                {{$students->links()}}
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page title -->
@endsection
